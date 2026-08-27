/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/global-network.js":
/*!****************************************!*\
  !*** ./resources/js/global-network.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _createForOfIteratorHelper(r, e) { var t = "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (!t) { if (Array.isArray(r) || (t = _unsupportedIterableToArray(r)) || e && r && "number" == typeof r.length) { t && (r = t); var _n = 0, F = function F() {}; return { s: F, n: function n() { return _n >= r.length ? { done: !0 } : { done: !1, value: r[_n++] }; }, e: function e(r) { throw r; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var o, a = !0, u = !1; return { s: function s() { t = t.call(r); }, n: function n() { var r = t.next(); return a = r.done, r; }, e: function e(r) { u = !0, o = r; }, f: function f() { try { a || null == t["return"] || t["return"](); } finally { if (u) throw o; } } }; }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var DATA = window.NETWORK_DATA;
var REGION_ORDER = window.REGION_ORDER;
document.addEventListener('DOMContentLoaded', function () {
  // Canvas setup
  var stage = document.querySelector('.map-stage');
  var cv = document.getElementById('mapCanvas');
  if (!stage || !cv) return;
  var ctx = cv.getContext('2d');
  var IW = DATA.meta.aspect;
  var IH = 1;
  var MINK = 1;
  var MAXK = 6.5;
  var view = {
    k: 1,
    Tx: 0,
    Ty: 0,
    baseW: 0,
    baseH: 0,
    VW: 0,
    VH: 0
  };
  var dpr = 1;
  var raf = null;
  var dragging = false;
  var moved = false;
  var lastPoint = {
    x: 0,
    y: 0
  };
  var downPin = null;
  var pinchDist = 0;
  var hintTimer = null;
  var pinsVisible = false;

  // UI Elements
  var pinsContainer = document.getElementById('pins');
  var tip = document.getElementById('tip');
  var scrollHint = document.getElementById('scrollHint');
  var noResults = document.getElementById('noResults');

  // Stat Counters
  var counters = document.querySelectorAll('.stat-counter');
  counters.forEach(function (counter) {
    var target = parseInt(counter.getAttribute('data-count'), 10);
    var span = counter.querySelector('span');
    var cur = 0;
    var step = Math.max(1, Math.round(target / 45));
    var timer = setInterval(function () {
      cur += step;
      if (cur >= target) {
        cur = target;
        clearInterval(timer);
      }
      span.textContent = cur;
    }, 22);
  });
  function clampT(v) {
    var nTx = v.Tx;
    var nTy = v.Ty;
    if (v.baseW * v.k <= v.VW) nTx = (v.VW - v.baseW * v.k) / 2;else nTx = Math.min(0, Math.max(v.VW - v.baseW * v.k, v.Tx));
    if (v.baseH * v.k <= v.VH) nTy = (v.VH - v.baseH * v.k) / 2;else nTy = Math.min(0, Math.max(v.VH - v.baseH * v.k, v.Ty));
    return _objectSpread(_objectSpread({}, v), {}, {
      Tx: nTx,
      Ty: nTy
    });
  }
  function centerAtK(v, kk) {
    return {
      x: (v.VW - v.baseW * kk) / 2,
      y: (v.VH - v.baseH * kk) / 2
    };
  }
  function clampView(v, tk, tx, ty) {
    var ntx = tx;
    var nty = ty;
    if (v.baseW * tk <= v.VW) ntx = (v.VW - v.baseW * tk) / 2;else ntx = Math.min(0, Math.max(v.VW - v.baseW * tk, tx));
    if (v.baseH * tk <= v.VH) nty = (v.VH - v.baseH * tk) / 2;else nty = Math.min(0, Math.max(v.VH - v.baseH * tk, ty));
    return {
      tk: tk,
      tx: ntx,
      ty: nty
    };
  }
  function sx(v, nx) {
    return nx * v.baseW * v.k + v.Tx;
  }
  function sy(v, ny) {
    return ny * v.baseH * v.k + v.Ty;
  }
  function pinScaleForK(kk) {
    return Math.min(1.75, Math.max(1, Math.pow(kk, 0.52)));
  }
  function updatePins() {
    if (!pinsContainer) return;
    var ps = pinScaleForK(view.k);
    var pins = pinsContainer.querySelectorAll('.pin');
    pins.forEach(function (pinEl) {
      var nx = parseFloat(pinEl.getAttribute('data-nx'));
      var ny = parseFloat(pinEl.getAttribute('data-ny'));
      var x = sx(view, nx);
      var y = sy(view, ny);
      pinEl.style.left = "".concat(x, "px");
      pinEl.style.top = "".concat(y, "px");
      pinEl.style.transform = "translate(-50%, -50%) scale(".concat(ps, ")");
    });
  }
  function drawDots() {
    ctx.clearRect(0, 0, view.VW, view.VH);
    var spacing = 0.00357 * view.baseW * view.k;
    var r = Math.max(0.5, spacing * 0.24);
    ctx.fillStyle = 'rgba(54,165,194,0.32)';
    ctx.beginPath();
    var _iterator = _createForOfIteratorHelper(DATA.dots),
      _step;
    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var d = _step.value;
        var x = sx(view, d[0] / 100);
        var y = sy(view, d[1] / 100);
        if (x < -2 || x > view.VW + 2 || y < -2 || y > view.VH + 2) continue;
        ctx.moveTo(x + r, y);
        ctx.arc(x, y, r, 0, 6.283);
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
    ctx.fill();
  }
  function syncView() {
    drawDots();
    updatePins();
    if (tip.classList.contains('show')) hideTip();
  }
  function layout() {
    var r = stage.getBoundingClientRect();
    if (r.width === 0 || r.height === 0) return false;
    var fit = Math.min(r.width / IW, r.height / IH);
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
    var k0 = view.k;
    var x0 = view.Tx;
    var y0 = view.Ty;
    var t0 = performance.now();
    var dur = 560;
    var _step2 = function step(now) {
      var p = Math.min(1, (now - t0) / dur);
      var e = 1 - Math.pow(1 - p, 3);
      view = clampT(_objectSpread(_objectSpread({}, view), {}, {
        k: k0 + (tk - k0) * e,
        Tx: x0 + (tx - x0) * e,
        Ty: y0 + (ty - y0) * e
      }));
      syncView();
      if (p < 1) raf = requestAnimationFrame(_step2);else view = clampT(view);
    };
    raf = requestAnimationFrame(_step2);
  }
  function zoomBy(f) {
    if (view.VW === 0) return;
    var cx = view.VW / 2;
    var cy = view.VH / 2;
    var k0 = view.k;
    var k1 = Math.max(MINK, Math.min(MAXK, k0 * f));
    view = clampT(_objectSpread(_objectSpread({}, view), {}, {
      k: k1,
      Tx: cx - (cx - view.Tx) * (k1 / k0),
      Ty: cy - (cy - view.Ty) * (k1 / k0)
    }));
    renderView();
  }
  function resetZoom() {
    if (view.VW === 0) return;
    var c = centerAtK(view, 1);
    animateTo(1, c.x, c.y);
  }
  window.mapZoomIn = function () {
    return zoomBy(1.45);
  };
  window.mapZoomOut = function () {
    return zoomBy(1 / 1.45);
  };
  window.mapReset = function () {
    return resetZoom();
  };
  function flyToPin(pin) {
    if (view.VW === 0) return;
    var tk = Math.max(2.6, view.k);
    var nx = pin.x / 100;
    var ny = pin.y / 100;
    var tx = view.VW * 0.42 - nx * view.baseW * tk;
    var ty = view.VH / 2 - ny * view.baseH * tk;
    var c = clampView(view, tk, tx, ty);
    animateTo(c.tk, c.tx, c.ty);
  }
  function flyToRegion(rg) {
    if (view.VW === 0) return;
    if (rg === 'All') {
      resetZoom();
      return;
    }
    var pins = DATA.pins.filter(function (p) {
      return p.region === rg;
    });
    if (!pins.length) return;
    var minX = Infinity,
      maxX = -Infinity,
      minY = Infinity,
      maxY = -Infinity;
    pins.forEach(function (p) {
      var nx = p.x / 100;
      var ny = p.y / 100;
      if (nx < minX) minX = nx;
      if (nx > maxX) maxX = nx;
      if (ny < minY) minY = ny;
      if (ny > maxY) maxY = ny;
    });
    var MIN = 0.08;
    if (maxX - minX < MIN) {
      var d = (MIN - (maxX - minX)) / 2;
      minX -= d;
      maxX += d;
    }
    if (maxY - minY < MIN) {
      var _d = (MIN - (maxY - minY)) / 2;
      minY -= _d;
      maxY += _d;
    }
    var padX = (maxX - minX) * 0.14;
    var padY = (maxY - minY) * 0.14;
    minX = Math.max(0, minX - padX);
    maxX = Math.min(1, maxX + padX);
    minY = Math.max(0, minY - padY);
    maxY = Math.min(1, maxY + padY);
    var cx = (minX + maxX) / 2;
    var cy = (minY + maxY) / 2;
    var boxW = Math.max(0.01, maxX - minX);
    var boxH = Math.max(0.01, maxY - minY);
    var tk = Math.min(view.VW / (boxW * view.baseW), view.VH / (boxH * view.baseH));
    tk = Math.max(1.35, Math.min(MAXK, tk));
    var tx = view.VW / 2 - cx * view.baseW * tk;
    var ty = view.VH / 2 - cy * view.baseH * tk;
    var c = clampView(view, tk, tx, ty);
    animateTo(c.tk, c.tx, c.ty);
  }
  var hoveredPinCode = null;
  function hideTip() {
    hoveredPinCode = null;
    tip.classList.remove('show');
    tip.style.display = 'none';
  }
  function updatePinTip(clientX, clientY) {
    var _document$elementFrom;
    var pinEl = (_document$elementFrom = document.elementFromPoint(clientX, clientY)) === null || _document$elementFrom === void 0 ? void 0 : _document$elementFrom.closest('.pin');
    var code = pinEl === null || pinEl === void 0 ? void 0 : pinEl.getAttribute('data-code');
    if (code && pinEl) {
      var p = DATA.pins.find(function (p) {
        return p.code.toLowerCase() === code.toLowerCase();
      });
      if (!p) return;
      if (hoveredPinCode !== code) {
        hoveredPinCode = code;
        showTip(pinEl, p);
      } else {
        tip.style.left = pinEl.style.left;
        tip.style.top = pinEl.style.top;
        var top = parseFloat(pinEl.style.top);
        if (top < 70) tip.classList.add('below');else tip.classList.remove('below');
      }
    } else {
      hideTip();
    }
  }
  function showTip(pinEl, p) {
    if (dragging) return;
    tip.innerHTML = "\n            <div class=\"font-transducer font-medium Little-text text-[#103440] tracking-[-0.2px] uppercase\">".concat(p.city, "</div>\n            <div class=\"flex gap-1 font-normal Tiny-text text-[#667980]\">\n                <span class=\"font-transducer font-medium text-[#36A5C2] tracking-[-0.2px]\">").concat(p.code, "</span>\n                <span>\xB7</span>\n                <span class='capitalize'>").concat(p.country, "</span>\n            </div>\n        ");
    tip.style.left = pinEl.style.left;
    tip.style.top = pinEl.style.top;
    tip.style.display = 'flex';
    var top = parseFloat(pinEl.style.top);
    if (top < 70) tip.classList.add('below');else tip.classList.remove('below');
    // Force reflow
    void tip.offsetWidth;
    tip.classList.add('show');
  }

  // Generate pins DOM
  if (pinsContainer) {
    pinsContainer.innerHTML = '';
    DATA.pins.forEach(function (p, i) {
      var el = document.createElement('div');
      el.className = 'pin';
      if (i % 6 === 0) el.classList.add('beacon');
      el.setAttribute('data-code', p.code.toLowerCase());
      el.setAttribute('data-region', p.region);
      el.setAttribute('data-country', p.country.toLowerCase());
      el.setAttribute('data-city', p.city.toLowerCase());
      el.setAttribute('data-nx', (p.x / 100).toString());
      el.setAttribute('data-ny', (p.y / 100).toString());
      var ring = document.createElement('span');
      ring.className = 'ring';
      var dot = document.createElement('span');
      dot.className = 'dot';
      el.appendChild(ring);
      el.appendChild(dot);
      pinsContainer.appendChild(el);
      setTimeout(function () {
        el.style.opacity = 1;
      }, 200 + i * 12);
    });
  }

  // Pointer Events
  stage.addEventListener('pointerdown', function (e) {
    var pinEl = e.target.closest('.pin');
    var code = pinEl === null || pinEl === void 0 ? void 0 : pinEl.getAttribute('data-code');
    downPin = code ? DATA.pins.find(function (p) {
      return p.code.toLowerCase() === code;
    }) || null : null;
    moved = false;
    lastPoint = {
      x: e.clientX,
      y: e.clientY
    };
    var engage = e.pointerType === 'mouse' || view.k > 1.02;
    dragging = engage;
    if (engage) {
      stage.classList.add('grabbing');
      stage.setPointerCapture(e.pointerId);
    }
  });
  stage.addEventListener('pointermove', function (e) {
    var dx = e.clientX - lastPoint.x;
    var dy = e.clientY - lastPoint.y;
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
    lastPoint = {
      x: e.clientX,
      y: e.clientY
    };
  });
  stage.addEventListener('pointerup', function (e) {
    dragging = false;
    stage.classList.remove('grabbing');
    if (!moved && downPin) {
      openOffice(downPin.code);
    } else if (e.pointerType === 'mouse') {
      updatePinTip(e.clientX, e.clientY);
    }
    downPin = null;
  });
  stage.addEventListener('pointerleave', function (e) {
    if (e.pointerType === 'mouse') hideTip();
  });
  stage.addEventListener('pointercancel', function () {
    moved = true;
    dragging = false;
    stage.classList.remove('grabbing');
  });
  stage.addEventListener('wheel', function (e) {
    if (!(e.ctrlKey || e.metaKey)) {
      scrollHint.classList.add('show');
      if (hintTimer) clearTimeout(hintTimer);
      hintTimer = setTimeout(function () {
        return scrollHint.classList.remove('show');
      }, 900);
      return;
    }
    e.preventDefault();
    scrollHint.classList.remove('show');
    var rect = stage.getBoundingClientRect();
    var cx = e.clientX - rect.left;
    var cy = e.clientY - rect.top;
    var k0 = view.k;
    var k1 = k0 * (1 - e.deltaY * 0.0024);
    k1 = Math.max(MINK, Math.min(MAXK, k1));
    view = clampT(_objectSpread(_objectSpread({}, view), {}, {
      k: k1,
      Tx: cx - (cx - view.Tx) * (k1 / k0),
      Ty: cy - (cy - view.Ty) * (k1 / k0)
    }));
    renderView();
  }, {
    passive: false
  });

  // Touch Pinch
  stage.addEventListener('touchstart', function (e) {
    if (e.touches.length === 2) {
      var a = e.touches[0];
      var b = e.touches[1];
      pinchDist = Math.hypot(a.clientX - b.clientX, a.clientY - b.clientY);
      dragging = false;
    }
  }, {
    passive: true
  });
  stage.addEventListener('touchmove', function (e) {
    if (e.touches.length !== 2) return;
    e.preventDefault();
    var rect = stage.getBoundingClientRect();
    var cx = (e.touches[0].clientX + e.touches[1].clientX) / 2 - rect.left;
    var cy = (e.touches[0].clientY + e.touches[1].clientY) / 2 - rect.top;
    var a = e.touches[0];
    var b = e.touches[1];
    var d = Math.hypot(a.clientX - b.clientX, a.clientY - b.clientY);
    var k0 = view.k;
    var k1 = k0 * (d / pinchDist);
    pinchDist = d;
    k1 = Math.max(MINK, Math.min(MAXK, k1));
    view = clampT(_objectSpread(_objectSpread({}, view), {}, {
      k: k1,
      Tx: cx - (cx - view.Tx) * (k1 / k0),
      Ty: cy - (cy - view.Ty) * (k1 / k0)
    }));
    renderView();
  }, {
    passive: false
  });

  // Init Map using ResizeObserver to ensure dimensions are loaded
  var initialized = false;
  var ro = new ResizeObserver(function () {
    var hasSize = layout();
    if (hasSize && !initialized) {
      initialized = true;
      var c = centerAtK(view, 1);
      view.k = 1;
      view.Tx = c.x;
      view.Ty = c.y;
    }
    if (initialized) renderView();
  });
  ro.observe(stage);

  // Filtering & Accordion Logic
  var activeRegion = 'All';
  var searchQuery = '';
  var searchInput = document.getElementById('search');
  var clearBtn = document.getElementById('clearBtn');
  var regionButtons = document.querySelectorAll('[data-rg]');
  var regionSections = document.querySelectorAll('.region-section');
  var pins = document.querySelectorAll('.pin');
  function highlightText(el, query) {
    var orig = el.getAttribute('data-original');
    if (!orig) return;
    if (!query) {
      el.innerHTML = orig;
      return;
    }
    var idx = orig.toLowerCase().indexOf(query);
    if (idx >= 0) {
      el.innerHTML = orig.substring(0, idx) + '<span class="bg-[#36A5C2] text-white px-1 rounded">' + orig.substring(idx, idx + query.length) + '</span>' + orig.substring(idx + query.length);
    } else {
      el.innerHTML = orig;
    }
  }
  function applyFilters() {
    var q = searchQuery.trim().toLowerCase();
    var visibleCount = 0;
    regionSections.forEach(function (sec) {
      var rg = sec.getAttribute('data-region');
      var inR = activeRegion === 'All' || activeRegion === rg;
      if (!inR) {
        sec.style.display = 'none';
        return;
      }
      var hasVisibleCountry = false;
      var countries = sec.querySelectorAll('.country-box');
      countries.forEach(function (cbox) {
        var cName = cbox.getAttribute('data-name');
        var cities = cbox.getAttribute('data-cities');
        var match = !q || cName.includes(q) || cities.includes(q);
        if (match) {
          cbox.style.display = 'block';
          hasVisibleCountry = true;
          visibleCount++;
          // Highlight text
          var titleEl = cbox.querySelector('.country-title');
          if (titleEl) highlightText(titleEl, q);
          var cityEls = cbox.querySelectorAll('.city-title');
          cityEls.forEach(function (el) {
            return highlightText(el, q);
          });

          // Auto-open if searching
          var content = cbox.querySelector('.country-content');
          var icon = cbox.querySelector('.arrow-icon');
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
    pins.forEach(function (pinEl) {
      var rg = pinEl.getAttribute('data-region');
      var inR = activeRegion === 'All' || activeRegion === rg;
      pinEl.classList.remove('dim', 'hit');
      if (!q) {
        if (!inR) pinEl.classList.add('dim');
      } else {
        var cName = pinEl.getAttribute('data-country');
        var city = pinEl.getAttribute('data-city');
        var code = pinEl.getAttribute('data-code');
        var match = cName.includes(q) || city.includes(q) || code.includes(q);
        if (match && inR) pinEl.classList.add('hit');else pinEl.classList.add('dim');
      }
    });
  }
  if (searchInput) {
    searchInput.addEventListener('input', function (e) {
      searchQuery = e.target.value;
      applyFilters();
    });
  }
  if (clearBtn) {
    clearBtn.addEventListener('click', function () {
      searchQuery = '';
      searchInput.value = '';
      searchInput.focus();
      applyFilters();
    });
  }
  regionButtons.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      var rg = btn.getAttribute('data-rg');
      activeRegion = rg;

      // Update active state across all button groups
      regionButtons.forEach(function (b) {
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
  document.querySelectorAll('.country-btn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      var box = e.currentTarget.closest('.country-box');
      var content = box.querySelector('.country-content');
      var icon = box.querySelector('.arrow-icon');
      var isOpen = box.classList.contains('open');
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

  // Panel
  var panel = document.getElementById('detailPanel');
  var overlay = document.getElementById('panelOverlay');
  var panelClose = document.querySelectorAll('.panel-close');
  window.openOffice = function (code) {
    var pin = DATA.pins.find(function (p) {
      return p.code.toLowerCase() === code.toLowerCase();
    });
    if (!pin) return;

    // Remove selection
    pins.forEach(function (p) {
      return p.classList.remove('sel');
    });
    var activePin = document.querySelector(".pin[data-code=\"".concat(code.toLowerCase(), "\"]"));
    if (activePin) activePin.classList.add('sel');
    document.getElementById('panel-code').textContent = pin.code;
    document.getElementById('panel-city').textContent = pin.city;
    document.getElementById('panel-location').textContent = "".concat(pin.country, " \xB7 ").concat(pin.region);
    panel.classList.add('open');
    overlay.classList.add('show');
    flyToPin(pin);
  };
  function closePanel() {
    panel.classList.remove('open');
    overlay.classList.remove('show');
    pins.forEach(function (p) {
      return p.classList.remove('sel');
    });
  }
  panelClose.forEach(function (btn) {
    return btn.addEventListener('click', closePanel);
  });
  overlay.addEventListener('click', closePanel);
  document.querySelectorAll('.office-btn').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      openOffice(e.currentTarget.getAttribute('data-code'));
    });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closePanel();
  });
});

/***/ }),

/***/ 1:
/*!**********************************************!*\
  !*** multi ./resources/js/global-network.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/mubashirt/react-projects/alg-landingpage-laravel/resources/js/global-network.js */"./resources/js/global-network.js");


/***/ })

/******/ });