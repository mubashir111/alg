const DATA = window.NETWORK_DATA;
const REGION_ORDER = window.REGION_ORDER;

document.addEventListener('DOMContentLoaded', () => {
    // Canvas setup
    const stage = document.querySelector('.map-stage');
    const cv = document.getElementById('mapCanvas');
    if (!stage || !cv) return;

    const ctx = cv.getContext('2d');
    const IW = DATA.meta.aspect;
    const IH = 1;
    const MINK = 1;
    const MAXK = 6.5;

    let view = { k: 1, Tx: 0, Ty: 0, baseW: 0, baseH: 0, VW: 0, VH: 0 };
    let dpr = 1;
    let raf = null;
    let dragging = false;
    let moved = false;
    let lastPoint = { x: 0, y: 0 };
    let downPin = null;
    let pinchDist = 0;
    let hintTimer = null;

    let pinsVisible = false;
    
    // UI Elements
    const pinsContainer = document.getElementById('pins');
    const tip = document.getElementById('tip');
    const scrollHint = document.getElementById('scrollHint');
    const noResults = document.getElementById('noResults');

    // Stat Counters
    const counters = document.querySelectorAll('.stat-counter');
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'), 10);
        const span = counter.querySelector('span');
        let cur = 0;
        const step = Math.max(1, Math.round(target / 45));
        const timer = setInterval(() => {
            cur += step;
            if (cur >= target) {
                cur = target;
                clearInterval(timer);
            }
            span.textContent = cur;
        }, 22);
    });

    function clampT(v) {
        let nTx = v.Tx;
        let nTy = v.Ty;
        if (v.baseW * v.k <= v.VW) nTx = (v.VW - v.baseW * v.k) / 2;
        else nTx = Math.min(0, Math.max(v.VW - v.baseW * v.k, v.Tx));
        if (v.baseH * v.k <= v.VH) nTy = (v.VH - v.baseH * v.k) / 2;
        else nTy = Math.min(0, Math.max(v.VH - v.baseH * v.k, v.Ty));
        return { ...v, Tx: nTx, Ty: nTy };
    }

    function centerAtK(v, kk) {
        return { x: (v.VW - v.baseW * kk) / 2, y: (v.VH - v.baseH * kk) / 2 };
    }

    function clampView(v, tk, tx, ty) {
        let ntx = tx;
        let nty = ty;
        if (v.baseW * tk <= v.VW) ntx = (v.VW - v.baseW * tk) / 2;
        else ntx = Math.min(0, Math.max(v.VW - v.baseW * tk, tx));
        if (v.baseH * tk <= v.VH) nty = (v.VH - v.baseH * tk) / 2;
        else nty = Math.min(0, Math.max(v.VH - v.baseH * tk, ty));
        return { tk, tx: ntx, ty: nty };
    }

    function sx(v, nx) { return nx * v.baseW * v.k + v.Tx; }
    function sy(v, ny) { return ny * v.baseH * v.k + v.Ty; }

    function pinScaleForK(kk) {
        return Math.min(1.75, Math.max(1, Math.pow(kk, 0.52)));
    }

    function updatePins() {
        if (!pinsContainer) return;
        const ps = pinScaleForK(view.k);
        const pins = pinsContainer.querySelectorAll('.pin');
        pins.forEach(pinEl => {
            const nx = parseFloat(pinEl.getAttribute('data-nx'));
            const ny = parseFloat(pinEl.getAttribute('data-ny'));
            const x = sx(view, nx);
            const y = sy(view, ny);
            pinEl.style.left = `${x}px`;
            pinEl.style.top = `${y}px`;
            pinEl.style.transform = `translate(-50%, -50%) scale(${ps})`;
        });
    }

    function drawDots() {
        ctx.clearRect(0, 0, view.VW, view.VH);
        const spacing = 0.00357 * view.baseW * view.k;
        const r = Math.max(0.5, spacing * 0.24);
        ctx.fillStyle = 'rgba(54,165,194,0.32)';
        ctx.beginPath();
        for (const d of DATA.dots) {
            const x = sx(view, d[0] / 100);
            const y = sy(view, d[1] / 100);
            if (x < -2 || x > view.VW + 2 || y < -2 || y > view.VH + 2) continue;
            ctx.moveTo(x + r, y);
            ctx.arc(x, y, r, 0, 6.283);
        }
        ctx.fill();
    }

    function syncView() {
        drawDots();
        updatePins();
        if (tip.classList.contains('show')) hideTip();
    }

    function layout() {
        const r = stage.getBoundingClientRect();
        if (r.width === 0 || r.height === 0) return false;
        const fit = Math.min(r.width / IW, r.height / IH);
        dpr = Math.min(window.devicePixelRatio || 1, 2);
        view.VW = r.width;
        view.VH = r.height;
        view.baseW = IW * fit;
        view.baseH = IH * fit;
        cv.style.width = r.width + 'px';
        cv.style.height = r.height + 'px';
        cv.width = r.width * dpr;
        cv.height = r.height * dpr;
        ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
        return true;
    }

    function renderView() {
        if (view.VW === 0 || view.VH === 0) return;
        view = clampT(view);
        syncView();
    }

    function animateTo(tk, tx, ty) {
        if (isNaN(tk) || isNaN(tx) || isNaN(ty)) return;
        if (raf) cancelAnimationFrame(raf);
        const k0 = view.k;
        const x0 = view.Tx;
        const y0 = view.Ty;
        const t0 = performance.now();
        const dur = 560;
        const step = (now) => {
            let p = Math.min(1, (now - t0) / dur);
            const e = 1 - Math.pow(1 - p, 3);
            view = clampT({
                ...view,
                k: k0 + (tk - k0) * e,
                Tx: x0 + (tx - x0) * e,
                Ty: y0 + (ty - y0) * e
            });
            syncView();
            if (p < 1) raf = requestAnimationFrame(step);
            else view = clampT(view);
        };
        raf = requestAnimationFrame(step);
    }

    function zoomBy(f) {
        if (view.VW === 0) return;
        const cx = view.VW / 2;
        const cy = view.VH / 2;
        const k0 = view.k;
        const k1 = Math.max(MINK, Math.min(MAXK, k0 * f));
        view = clampT({
            ...view,
            k: k1,
            Tx: cx - (cx - view.Tx) * (k1 / k0),
            Ty: cy - (cy - view.Ty) * (k1 / k0)
        });
        renderView();
    }

    function resetZoom() {
        if (view.VW === 0) return;
        const c = centerAtK(view, 1);
        animateTo(1, c.x, c.y);
    }

    window.mapZoomIn = () => zoomBy(1.45);
    window.mapZoomOut = () => zoomBy(1/1.45);
    window.mapReset = () => resetZoom();

    function flyToPin(pin) {
        if (view.VW === 0) return;
        let tk = Math.max(2.6, view.k);
        const nx = pin.x / 100;
        const ny = pin.y / 100;
        let tx = view.VW * 0.42 - nx * view.baseW * tk;
        let ty = view.VH / 2 - ny * view.baseH * tk;
        const c = clampView(view, tk, tx, ty);
        animateTo(c.tk, c.tx, c.ty);
    }

    function flyToRegion(rg) {
        if (view.VW === 0) return;
        if (rg === 'All') {
            resetZoom();
            return;
        }
        const pins = DATA.pins.filter(p => p.region === rg);
        if (!pins.length) return;
        let minX = Infinity, maxX = -Infinity, minY = Infinity, maxY = -Infinity;
        pins.forEach(p => {
            const nx = p.x / 100;
            const ny = p.y / 100;
            if (nx < minX) minX = nx;
            if (nx > maxX) maxX = nx;
            if (ny < minY) minY = ny;
            if (ny > maxY) maxY = ny;
        });
        const MIN = 0.08;
        if (maxX - minX < MIN) { const d = (MIN - (maxX - minX)) / 2; minX -= d; maxX += d; }
        if (maxY - minY < MIN) { const d = (MIN - (maxY - minY)) / 2; minY -= d; maxY += d; }
        const padX = (maxX - minX) * 0.14;
        const padY = (maxY - minY) * 0.14;
        minX = Math.max(0, minX - padX);
        maxX = Math.min(1, maxX + padX);
        minY = Math.max(0, minY - padY);
        maxY = Math.min(1, maxY + padY);
        const cx = (minX + maxX) / 2;
        const cy = (minY + maxY) / 2;
        const boxW = Math.max(0.01, maxX - minX);
        const boxH = Math.max(0.01, maxY - minY);
        let tk = Math.min(view.VW / (boxW * view.baseW), view.VH / (boxH * view.baseH));
        tk = Math.max(1.35, Math.min(MAXK, tk));
        let tx = view.VW / 2 - cx * view.baseW * tk;
        let ty = view.VH / 2 - cy * view.baseH * tk;
        const c = clampView(view, tk, tx, ty);
        animateTo(c.tk, c.tx, c.ty);
    }

    let hoveredPinCode = null;

    function hideTip() {
        hoveredPinCode = null;
        tip.classList.remove('show');
        tip.style.display = 'none';
    }

    function updatePinTip(clientX, clientY) {
        const pinEl = document.elementFromPoint(clientX, clientY)?.closest('.pin');
        const code = pinEl?.getAttribute('data-code');
        if (code && pinEl) {
            const p = DATA.pins.find(p => p.code.toLowerCase() === code.toLowerCase());
            if (!p) return;
            if (hoveredPinCode !== code) {
                hoveredPinCode = code;
                showTip(pinEl, p);
            } else {
                tip.style.left = pinEl.style.left;
                tip.style.top = pinEl.style.top;
                const top = parseFloat(pinEl.style.top);
                if (top < 70) tip.classList.add('below');
                else tip.classList.remove('below');
            }
        } else {
            hideTip();
        }
    }

    function showTip(pinEl, p) {
        if (dragging) return;
        tip.innerHTML = `
            <div class="font-transducer font-medium Little-text text-[#103440] tracking-[-0.2px] uppercase">${p.city}</div>
            <div class="flex gap-1 font-normal Tiny-text text-[#667980]">
                <span class="font-transducer font-medium text-[#36A5C2] tracking-[-0.2px]">${p.code}</span>
                <span>·</span>
                <span class='capitalize'>${p.country}</span>
            </div>
        `;
        tip.style.left = pinEl.style.left;
        tip.style.top = pinEl.style.top;
        tip.style.display = 'flex';
        const top = parseFloat(pinEl.style.top);
        if (top < 70) tip.classList.add('below');
        else tip.classList.remove('below');
        // Force reflow
        void tip.offsetWidth;
        tip.classList.add('show');
    }

    // Generate pins DOM
    if (pinsContainer) {
        pinsContainer.innerHTML = '';
        DATA.pins.forEach((p, i) => {
            const el = document.createElement('div');
            el.className = 'pin';
            if (i % 6 === 0) el.classList.add('beacon');
            el.setAttribute('data-code', p.code.toLowerCase());
            el.setAttribute('data-region', p.region);
            el.setAttribute('data-country', p.country.toLowerCase());
            el.setAttribute('data-city', p.city.toLowerCase());
            el.setAttribute('data-nx', (p.x / 100).toString());
            el.setAttribute('data-ny', (p.y / 100).toString());
            
            const ring = document.createElement('span');
            ring.className = 'ring';
            const dot = document.createElement('span');
            dot.className = 'dot';
            el.appendChild(ring);
            el.appendChild(dot);

            pinsContainer.appendChild(el);
            
            setTimeout(() => {
                el.style.opacity = 1;
            }, 200 + i * 12);
        });
    }

    // Pointer Events
    stage.addEventListener('pointerdown', (e) => {
        const pinEl = e.target.closest('.pin');
        const code = pinEl?.getAttribute('data-code');
        downPin = code ? DATA.pins.find(p => p.code.toLowerCase() === code) || null : null;
        moved = false;
        lastPoint = { x: e.clientX, y: e.clientY };
        const engage = e.pointerType === 'mouse' || view.k > 1.02;
        dragging = engage;
        if (engage) {
            stage.classList.add('grabbing');
            stage.setPointerCapture(e.pointerId);
        }
    });

    stage.addEventListener('pointermove', (e) => {
        const dx = e.clientX - lastPoint.x;
        const dy = e.clientY - lastPoint.y;
        if (dragging) {
            if (Math.abs(dx) + Math.abs(dy) > 3) {
                moved = true;
                hideTip();
            }
            view.Tx += dx;
            view.Ty += dy;
            renderView();
        } else if (e.pointerType === 'mouse') {
            updatePinTip(e.clientX, e.clientY);
        }
        lastPoint = { x: e.clientX, y: e.clientY };
    });

    stage.addEventListener('pointerup', (e) => {
        dragging = false;
        stage.classList.remove('grabbing');
        if (!moved && downPin) {
            openOffice(downPin.code);
        } else if (e.pointerType === 'mouse') {
            updatePinTip(e.clientX, e.clientY);
        }
        downPin = null;
    });

    stage.addEventListener('pointerleave', (e) => {
        if (e.pointerType === 'mouse') hideTip();
    });

    stage.addEventListener('pointercancel', () => {
        moved = true;
        dragging = false;
        stage.classList.remove('grabbing');
    });

    stage.addEventListener('wheel', (e) => {
        if (!(e.ctrlKey || e.metaKey)) {
            scrollHint.classList.add('show');
            if (hintTimer) clearTimeout(hintTimer);
            hintTimer = setTimeout(() => scrollHint.classList.remove('show'), 900);
            return;
        }
        e.preventDefault();
        scrollHint.classList.remove('show');
        const rect = stage.getBoundingClientRect();
        const cx = e.clientX - rect.left;
        const cy = e.clientY - rect.top;
        const k0 = view.k;
        let k1 = k0 * (1 - e.deltaY * 0.0024);
        k1 = Math.max(MINK, Math.min(MAXK, k1));
        view = clampT({
            ...view,
            k: k1,
            Tx: cx - (cx - view.Tx) * (k1 / k0),
            Ty: cy - (cy - view.Ty) * (k1 / k0)
        });
        renderView();
    }, { passive: false });

    // Touch Pinch
    stage.addEventListener('touchstart', (e) => {
        if (e.touches.length === 2) {
            const a = e.touches[0];
            const b = e.touches[1];
            pinchDist = Math.hypot(a.clientX - b.clientX, a.clientY - b.clientY);
            dragging = false;
        }
    }, { passive: true });

    stage.addEventListener('touchmove', (e) => {
        if (e.touches.length !== 2) return;
        e.preventDefault();
        const rect = stage.getBoundingClientRect();
        const cx = (e.touches[0].clientX + e.touches[1].clientX) / 2 - rect.left;
        const cy = (e.touches[0].clientY + e.touches[1].clientY) / 2 - rect.top;
        const a = e.touches[0];
        const b = e.touches[1];
        const d = Math.hypot(a.clientX - b.clientX, a.clientY - b.clientY);
        const k0 = view.k;
        let k1 = k0 * (d / pinchDist);
        pinchDist = d;
        k1 = Math.max(MINK, Math.min(MAXK, k1));
        view = clampT({
            ...view,
            k: k1,
            Tx: cx - (cx - view.Tx) * (k1 / k0),
            Ty: cy - (cy - view.Ty) * (k1 / k0)
        });
        renderView();
    }, { passive: false });

    // Init Map using ResizeObserver to ensure dimensions are loaded
    let initialized = false;
    const ro = new ResizeObserver(() => {
        const hasSize = layout();
        if (hasSize && !initialized) {
            initialized = true;
            const c = centerAtK(view, 1);
            view.k = 1; view.Tx = c.x; view.Ty = c.y;
        }
        if (initialized) renderView();
    });
    ro.observe(stage);

    // Filtering & Accordion Logic
    let activeRegion = 'All';
    let searchQuery = '';

    const searchInput = document.getElementById('search');
    const clearBtn = document.getElementById('clearBtn');
    const regionButtons = document.querySelectorAll('[data-rg]');
    const regionSections = document.querySelectorAll('.region-section');
    const pins = document.querySelectorAll('.pin');

    function highlightText(el, query) {
        const orig = el.getAttribute('data-original');
        if (!orig) return;
        if (!query) {
            el.innerHTML = orig;
            return;
        }
        const idx = orig.toLowerCase().indexOf(query);
        if (idx >= 0) {
            el.innerHTML = orig.substring(0, idx) + '<span class="bg-[#36A5C2] text-white px-1 rounded">' + orig.substring(idx, idx + query.length) + '</span>' + orig.substring(idx + query.length);
        } else {
            el.innerHTML = orig;
        }
    }

    function applyFilters() {
        const q = searchQuery.trim().toLowerCase();
        let visibleCount = 0;

        regionSections.forEach(sec => {
            const rg = sec.getAttribute('data-region');
            const inR = activeRegion === 'All' || activeRegion === rg;
            
            if (!inR) {
                sec.style.display = 'none';
                return;
            }

            let hasVisibleCountry = false;
            const countries = sec.querySelectorAll('.country-box');
            countries.forEach(cbox => {
                const cName = cbox.getAttribute('data-name');
                const cities = cbox.getAttribute('data-cities');
                const match = !q || cName.includes(q) || cities.includes(q);
                if (match) {
                    cbox.style.display = 'block';
                    hasVisibleCountry = true;
                    visibleCount++;
                    // Highlight text
                    const titleEl = cbox.querySelector('.country-title');
                    if (titleEl) highlightText(titleEl, q);
                    const cityEls = cbox.querySelectorAll('.city-title');
                    cityEls.forEach(el => highlightText(el, q));
                    
                    // Auto-open if searching
                    const content = cbox.querySelector('.country-content');
                    const icon = cbox.querySelector('.arrow-icon');
                    if (q) {
                        cbox.classList.add('open');
                        content.style.maxHeight = content.scrollHeight + 'px';
                        if (icon) icon.style.transform = 'rotate(90deg)';
                    } else if (cbox.classList.contains('open')) {
                        // Re-evaluate max-height just in case text wrapping changed
                        content.style.maxHeight = content.scrollHeight + 'px';
                    }
                } else {
                    cbox.style.display = 'none';
                }
            });

            sec.style.display = hasVisibleCountry ? 'flex' : 'none';
        });

        noResults.style.display = visibleCount ? 'none' : 'block';
        clearBtn.style.display = q ? 'flex' : 'none';

        // Update Pins
        pins.forEach(pinEl => {
            const rg = pinEl.getAttribute('data-region');
            const inR = activeRegion === 'All' || activeRegion === rg;
            pinEl.classList.remove('dim', 'hit');
            if (!q) {
                if (!inR) pinEl.classList.add('dim');
            } else {
                const cName = pinEl.getAttribute('data-country');
                const city = pinEl.getAttribute('data-city');
                const code = pinEl.getAttribute('data-code');
                const match = cName.includes(q) || city.includes(q) || code.includes(q);
                if (match && inR) pinEl.classList.add('hit');
                else pinEl.classList.add('dim');
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value;
            applyFilters();
        });
    }

    if (clearBtn) {
        clearBtn.addEventListener('click', () => {
            searchQuery = '';
            searchInput.value = '';
            searchInput.focus();
            applyFilters();
        });
    }

    regionButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const rg = btn.getAttribute('data-rg');
            activeRegion = rg;
            
            // Update active state across all button groups
            regionButtons.forEach(b => {
                if (b.getAttribute('data-rg') === rg) {
                    b.classList.add('border-[#103440]', 'font-semibold', 'text-[#FFFFFF]', 'bg-[#103440]');
                    b.classList.remove('border-[#F0F5F7]', 'font-normal', 'text-[#667980]');
                } else {
                    b.classList.remove('border-[#103440]', 'font-semibold', 'text-[#FFFFFF]', 'bg-[#103440]');
                    b.classList.add('border-[#F0F5F7]', 'font-normal', 'text-[#667980]');
                }
            });
            
            applyFilters();
            flyToRegion(rg);
        });
    });

    // Accordions
    document.querySelectorAll('.country-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const box = e.currentTarget.closest('.country-box');
            const content = box.querySelector('.country-content');
            const icon = box.querySelector('.arrow-icon');
            const isOpen = box.classList.contains('open');
            
            if (isOpen) {
                box.classList.remove('open');
                content.style.maxHeight = '0px';
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                box.classList.add('open');
                content.style.maxHeight = content.scrollHeight + 'px';
                if (icon) icon.style.transform = 'rotate(90deg)';
            }
        });
    });

    // Panel & Details Resolution
    const DETAILS = window.NETWORK_DETAILS || {};

    function escapeHtml(str) {
        if (!str) return '';
        return String(str)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;')
            .replace(/'/g, '&#039;');
    }

    const COUNTRY_EMAIL = (() => {
        const tallies = {};
        if (DATA && DATA.regions) {
            Object.values(DATA.regions).forEach(r => {
                if (r.countries) {
                    r.countries.forEach(c => {
                        if (c.cities) {
                            c.cities.forEach(ct => {
                                const d = DETAILS[ct.code];
                                const e = d ? d.email : null;
                                if (e) {
                                    tallies[c.country] = tallies[c.country] || {};
                                    tallies[c.country][e] = (tallies[c.country][e] || 0) + 1;
                                }
                            });
                        }
                    });
                }
            });
        }
        const out = {};
        Object.entries(tallies).forEach(([country, counts]) => {
            out[country] = Object.entries(counts).sort(
                (a, b) => b[1] - a[1] || a[0].localeCompare(b[0])
            )[0][0];
        });
        return out;
    })();

    function resolveOfficeEmail(code, country) {
        const d = DETAILS[code];
        return (d && d.email) || COUNTRY_EMAIL[country] || null;
    }

    function officeHasDetail(code, country) {
        const d = DETAILS[code] || {};
        const email = resolveOfficeEmail(code, country);
        return !!(
            (d.contacts && d.contacts.length) ||
            d.partner ||
            d.address ||
            d.phone ||
            email ||
            d.website ||
            d.company
        );
    }

    const panel = document.getElementById('detailPanel');
    const overlay = document.getElementById('panelOverlay');
    const panelClose = document.querySelectorAll('.panel-close');
    
    function renderDetailPanel(code, pin) {
        const codeUpper = code.toUpperCase();
        const details = DETAILS[codeUpper] || {};
        const country = pin.country;
        const email = resolveOfficeEmail(codeUpper, country);
        const hasDetail = officeHasDetail(codeUpper, country);

        const panelCode = document.getElementById('panel-code');
        const panelCity = document.getElementById('panel-city');
        const panelPartner = document.getElementById('panel-partner');
        const panelLocation = document.getElementById('panel-location');
        const panelBody = document.getElementById('panel-body');

        if (panelCode) panelCode.textContent = pin.code;
        if (panelCity) panelCity.textContent = pin.city;
        
        if (panelPartner) {
            if (details.partner) {
                panelPartner.textContent = `(${details.partner})`;
                panelPartner.classList.remove('hidden');
            } else {
                panelPartner.textContent = '';
                panelPartner.classList.add('hidden');
            }
        }

        if (panelLocation) {
            panelLocation.innerHTML = `<span>${pin.country}</span> <span>·</span> <span>${pin.region}</span>`;
        }

        if (!panelBody) return;

        if (hasDetail) {
            let html = '';

            // Contacts / Team
            if (details.contacts && details.contacts.length > 0) {
                html += `
                    <div class="py-4 flex flex-col gap-2 font-normal Small-text">
                        <div class="text-[#9FACB1]">Team</div>
                        ${details.contacts.map(c => `
                            <div class="w-full p-3 md:p-5 border-[2px] border-[#F0F5F7] flex flex-col gap-3 rounded-[16px]">
                                <div class="font-transducer font-medium text-[#103440] tracking-[-0.2px] uppercase">${escapeHtml(c.name)}</div>
                                <div class="text-[#667980]">${escapeHtml(c.title)}</div>
                            </div>
                        `).join('')}
                    </div>
                `;
            }

            html += `<div class="flex flex-col divide-y-[1px] divide-[#1034401A]">`;

            // Office / Address
            if (details.company || details.address) {
                html += `
                    <div class="py-4 flex gap-4 items-start">
                        <div class="shrink-0">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 32 32" height="18" width="18" class="text-[#36A5C2]"><path d="M 16 3 C 10.488281 3 6 7.488281 6 13 C 6 14.894531 6.640625 16.714844 7.625 18.28125 C 7.691406 18.390625 7.777344 18.484375 7.84375 18.59375 L 15.28125 28.53125 C 15.457031 28.769531 15.722656 28.917969 16.019531 28.929688 C 16.316406 28.941406 16.59375 28.816406 16.78125 28.59375 L 24.21875 18.59375 C 24.269531 18.511719 24.335938 18.441406 24.375 18.34375 C 25.394531 16.757813 26 14.914063 26 13 C 26 7.488281 21.511719 3 16 3 Z M 16 5 C 20.429688 5 24 8.570313 24 13 C 24 14.542969 23.515625 16.035156 22.65625 17.3125 L 16 26.1875 L 9.34375 17.3125 C 8.507813 16.054688 8 14.558594 8 13 C 8 8.570313 11.570313 5 16 5 Z M 16 9 C 13.789063 9 12 10.789063 12 13 C 12 15.210938 13.789063 17 16 17 C 18.210938 17 20 15.210938 20 13 C 20 10.789063 18.210938 9 16 9 Z M 16 11 C 17.117188 11 18 11.882813 18 13 C 18 14.117188 17.117188 15 16 15 C 14.882813 15 14 14.117188 14 13 C 14 11.882813 14.882813 11 16 11 Z"></path></svg>
                        </div>
                        <div class="flex flex-col gap-1 items-start font-normal Small-text">
                            <p class="text-[#9FACB1]">Office</p>
                            ${details.company ? `<p class="font-transducer text-[#103440] tracking-[-0.2px] uppercase">${escapeHtml(details.company)}</p>` : ''}
                            ${details.address ? `<p class="text-[#667980] capitalize">${escapeHtml(details.address)}</p>` : ''}
                        </div>
                    </div>
                `;
            }

            // Phone
            if (details.phone) {
                const phoneClean = details.phone.replace(/\s/g, '');
                html += `
                    <div class="py-4 flex gap-4 items-start">
                        <div class="shrink-0">
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="18" width="18" class="text-[#36A5C2]"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path><polyline points="23 2 16 2 16 9"></polyline><line x1="23" y1="2" x2="16" y2="9"></line></svg>
                        </div>
                        <div class="flex flex-col gap-1 items-start font-normal Small-text">
                            <p class="text-[#9FACB1]">Phone</p>
                            <a href="tel:${escapeHtml(phoneClean)}" class="text-[#103440] hover:text-[#36A5C2] Hover-effect">
                                ${escapeHtml(details.phone)}
                            </a>
                        </div>
                    </div>
                `;
            }

            // Email
            if (email) {
                html += `
                    <div class="py-4 flex gap-4 items-start">
                        <div class="shrink-0">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="18" width="18" class="text-[#36A5C2]"><rect width="416" height="320" x="48" y="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" rx="40" ry="40"></rect><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="m112 160 144 112 144-112"></path></svg>
                        </div>
                        <div class="flex flex-col gap-1 items-start font-normal Small-text">
                            <p class="text-[#9FACB1]">Email</p>
                            <a href="mailto:${escapeHtml(email)}" class="text-[#103440] hover:text-[#36A5C2] Hover-effect">
                                ${escapeHtml(email)}
                            </a>
                        </div>
                    </div>
                `;
            }

            // Website
            if (details.website) {
                const webDisplay = details.website.replace(/^https?:\/\//, '');
                html += `
                    <div class="py-4 flex gap-4 items-start">
                        <div class="shrink-0">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 32 32" height="18" width="18" class="text-[#36A5C2]"><path d="M 16 3 C 8.832031 3 3 8.832031 3 16 C 3 23.167969 8.832031 29 16 29 C 23.167969 29 29 23.167969 29 16 C 29 8.832031 23.167969 3 16 3 Z M 16 5 C 18.066406 5 20.007813 5.679688 21.625 6.8125 C 20.738281 7.742188 19.539063 8.761719 18.09375 9.875 C 16.292969 8.167969 14.28125 6.441406 12.375 5.5625 C 13.515625 5.203125 14.730469 5 16 5 Z M 10.28125 6.34375 C 12.199219 7.273438 14.246094 9.070313 16.09375 10.84375 C 14.226563 12.390625 12.316406 13.910156 10.46875 15.34375 C 10.28125 14.394531 10.15625 13.398438 10.09375 12.375 C 8.648438 12.195313 7.027344 12.128906 5.34375 12.1875 C 6.269531 9.472656 8.042969 7.425781 10.28125 6.34375 Z M 5.09375 14.1875 C 6.851563 14.125 8.523438 14.195313 10.03125 14.375 C 10.03125 15.421875 10.09375 16.488281 10.25 17.53125 C 8.441406 18.96875 6.640625 20.375 4.90625 21.6875 C 4.339844 19.957031 4 18.027344 4 16 C 4 15.382813 4.035156 14.78125 5.09375 14.1875 Z"></path></svg>
                        </div>
                        <div class="flex flex-col gap-1 items-start font-normal Small-text">
                            <p class="text-[#9FACB1]">Website</p>
                            <a href="${escapeHtml(details.website)}" target="_blank" rel="noopener noreferrer" class="text-[#103440] hover:text-[#36A5C2] Hover-effect">
                                ${escapeHtml(webDisplay)}
                            </a>
                        </div>
                    </div>
                `;
            }

            html += `</div>`;
            panelBody.innerHTML = html;
        } else {
            panelBody.innerHTML = `
                <div class="mt-4 flex flex-col gap-4 items-center">
                    <div class="w-full p-3 md:p-5 border-[2px] border-[#F0F5F7] rounded-[16px]">
                        <p class="font-normal Medium-text text-[#103440]">
                            Full team and contact details for this station are available on request. Reach our central team and we'll connect you with the right local office.
                        </p>
                    </div>
                    <button onclick="if(typeof openContactModal === 'function') openContactModal(); closePanel();" class="w-fit py-3 px-6 font-normal tracking-[0.2px] Small-text BD-button">
                        Get in touch
                    </button>
                </div>
            `;
        }
    }

    window.openOffice = (code) => {
        if (!code) return;
        let pin = DATA.pins.find(p => p.code.toLowerCase() === code.toLowerCase());
        if (!pin) {
            for (const [regionName, regionData] of Object.entries(DATA.regions || {})) {
                for (const c of (regionData.countries || [])) {
                    const cityEntry = (c.cities || []).find(ct => ct.code.toLowerCase() === code.toLowerCase());
                    if (cityEntry) {
                        pin = {
                            code: cityEntry.code,
                            city: cityEntry.city,
                            country: c.country,
                            region: regionName
                        };
                        break;
                    }
                }
                if (pin) break;
            }
        }
        if (!pin) return;
        
        // Remove selection
        if (pinsContainer) {
            pinsContainer.querySelectorAll('.pin').forEach(p => p.classList.remove('sel'));
            const activePin = pinsContainer.querySelector(`.pin[data-code="${code.toLowerCase()}"]`);
            if (activePin) activePin.classList.add('sel');
        }

        renderDetailPanel(code, pin);
        
        panel.classList.add('open');
        overlay.classList.add('show');
        if (typeof pin.x === 'number' && typeof pin.y === 'number') {
            flyToPin(pin);
        }
    };

    window.closePanel = () => {
        panel.classList.remove('open');
        overlay.classList.remove('show');
        if (pinsContainer) {
            pinsContainer.querySelectorAll('.pin').forEach(p => p.classList.remove('sel'));
        }
    };

    panelClose.forEach(btn => btn.addEventListener('click', window.closePanel));
    overlay.addEventListener('click', window.closePanel);
    
    document.querySelectorAll('.office-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            openOffice(e.currentTarget.getAttribute('data-code'));
        });
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') window.closePanel();
    });
});
