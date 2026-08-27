@php
    $currentRoute = request()->path();
    
    function isActiveNav($href, $currentRoute) {
        $path = $href === '/' ? '/' : ltrim($href, '/');
        if ($path === '/') {
            return $currentRoute === '/';
        }
        return strpos($currentRoute, $path) === 0;
    }

    $navItems = [
        ['href' => '/gssa', 'name' => 'What is a GSSA?'],
        ['href' => '/services', 'name' => 'Services'],
        ['href' => '/global-network', 'name' => 'Global Network'],
        ['href' => '/news', 'name' => 'News'],
    ];

    $menuItems = [
        ['href' => '/', 'name' => 'Home'],
        ['href' => '/about-us', 'name' => 'About Us'],
        ['href' => '/gssa', 'name' => 'What is a GSSA?'],
        ['href' => '/services', 'name' => 'Services'],
        ['href' => '/global-network', 'name' => 'Global Network'],
        ['href' => '/news', 'name' => 'News'],
        ['href' => '/leadership', 'name' => 'Leadership'],
        ['href' => '/careers', 'name' => 'Careers'],
    ];
@endphp

<div class="Fixed-navbar w-full mt-2 px-2 flex flex-col items-center">
    <div class="w-full max-w-[1700px] relative">
        <nav class="flex w-full h-[60px] md:h-[62px] xl:h-[66px] border-[2px] border-[#F0F5F7] bg-[#F0F5F7BF] backdrop-blur-[25px] rounded-[10px] xl:rounded-[16px] items-center px-4">
            <div class="flex w-full gap-5 items-center justify-between">
                <div class="max-w-fit">
                    <a href="{{ url('/') }}" class="cursor-pointer">
                        <img src="{{ asset('Alg-logo.svg') }}" alt="ALG - Air Logistics Group" class="w-[187px]" />
                    </a>
                </div>
                <div class="hidden lg:flex gap-5 xl:gap-[32px] items-center">
                    @foreach($navItems as $item)
                        <a href="{{ url($item['href']) }}" class="w-fit font-normal Small-text tracking-[0.2px] {{ isActiveNav($item['href'], $currentRoute) ? 'font-semibold text-[#36A5C2]' : 'text-[#103440] hover:text-[#36A5C2] Hover-effect' }}">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                    <button id="company-dropdown-btn" class="w-fit flex gap-2 items-center font-normal Small-text tracking-[0.2px] cursor-pointer {{ (isActiveNav('/about-us', $currentRoute) || isActiveNav('/leadership', $currentRoute) || isActiveNav('/careers', $currentRoute)) ? 'font-semibold text-[#36A5C2]' : 'text-[#103440] hover:text-[#36A5C2] Hover-effect' }}">
                        <span>Company</span> 
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"></path></svg>
                    </button>
                </div>
                <div class="hidden lg:flex">
                    <button onclick="openContactModal()" class="w-fit py-3 px-6 font-normal tracking-[0.2px] Small-text BD-button">
                        Connect with us
                    </button>
                </div>
                <div class="lg:hidden flex" style="justify-content: flex-end;">
                    <button id="mobile-menu-btn" class="w-fit text-[24px] md:text-[28px] Text-button cursor-pointer">
                        <svg id="icon-menu" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="4" y1="8" x2="20" y2="8"></line><line x1="4" y1="16" x2="20" y2="16"></line></svg>
                        <svg id="icon-close" class="hidden" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </button>
                </div>
            </div>
        </nav>

        {{-- DROPDOWN MENU: Placed OUTSIDE the <nav> to avoid backdrop-filter clipping --}}
        <div id="company-dropdown-menu" style="display:none; position:fixed; z-index:99999;">
            <div style="min-width:160px; background:#F0F5F7; border-radius:8px; padding:8px; box-shadow: 0 4px 20px rgba(0,0,0,0.12);">
                <a href="{{ url('/about-us') }}" class="block w-full p-2 mb-1 font-normal Small-text rounded-[4px] cursor-pointer {{ isActiveNav('/about-us', $currentRoute) ? 'bg-[#FFFFFF]' : 'hover:bg-[#FFFFFF] Hover-effect' }}" style="display:block; text-decoration:none; color:#103440;">
                    About Us
                </a>
                <a href="{{ url('/leadership') }}" class="block w-full p-2 mb-1 font-normal Small-text rounded-[4px] cursor-pointer {{ isActiveNav('/leadership', $currentRoute) ? 'bg-[#FFFFFF]' : 'hover:bg-[#FFFFFF] Hover-effect' }}" style="display:block; text-decoration:none; color:#103440;">
                    Leadership
                </a>
                <a href="{{ url('/careers') }}" class="block w-full p-2 font-normal Small-text rounded-[4px] cursor-pointer {{ isActiveNav('/careers', $currentRoute) ? 'bg-[#FFFFFF]' : 'hover:bg-[#FFFFFF] Hover-effect' }}" style="display:block; text-decoration:none; color:#103440;">
                    Careers
                </a>
            </div>
        </div>

        <div id="mobile-menu" class="lg:hidden absolute h-screen w-full top-full left-0 mt-2 border-[2px] border-[#F0F5F7] bg-[#F0F5F7BF] backdrop-blur-[25px] rounded-[16px] overflow-hidden transition-all duration-500 ease-in-out z-50 grid-rows-[0fr] opacity-0 pointer-events-none" style="display: grid;">
            <div class='overflow-hidden'>
                <div class="w-full pt-5 md:pt-7 pb-[30px] md:pb-10 px-4 md:px-7 flex flex-col gap-6">
                    <div class="flex flex-col gap-4">
                        @foreach($menuItems as $item)
                            <a href="{{ url($item['href']) }}" class="w-fit font-normal Medium-text {{ isActiveNav($item['href'], $currentRoute) ? 'font-semibold text-[#36A5C2]' : 'hover:font-semibold text-[#103440] hover:text-[#36A5C2] Hover-effect' }}">
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                    <button onclick="openContactModal()" class="w-fit py-3 px-6 font-normal tracking-[0.2px] Medium-text BD-button">
                        Connect with us
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ========== Mobile menu toggle ==========
        var mobilebtn = document.getElementById('mobile-menu-btn');
        var mobileMenu = document.getElementById('mobile-menu');
        var iconMenu = document.getElementById('icon-menu');
        var iconClose = document.getElementById('icon-close');
        var isOpen = false;

        mobilebtn.addEventListener('click', function() {
            isOpen = !isOpen;
            if (isOpen) {
                mobileMenu.classList.remove('grid-rows-[0fr]', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.add('grid-rows-[1fr]', 'opacity-100', 'pointer-events-auto');
                iconMenu.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('grid-rows-[0fr]', 'opacity-0', 'pointer-events-none');
                mobileMenu.classList.remove('grid-rows-[1fr]', 'opacity-100', 'pointer-events-auto');
                iconClose.classList.add('hidden');
                iconMenu.classList.remove('hidden');
            }
        });

        // ========== Company Dropdown ==========
        var ddBtn = document.getElementById('company-dropdown-btn');
        var ddMenu = document.getElementById('company-dropdown-menu');
        var ddTimer = null;

        function positionDropdown() {
            var rect = ddBtn.getBoundingClientRect();
            ddMenu.style.top = (rect.bottom + 8) + 'px';
            ddMenu.style.left = (rect.right - ddMenu.offsetWidth) + 'px';
        }

        function showDropdown() {
            clearTimeout(ddTimer);
            ddMenu.style.display = 'block';
            positionDropdown();
        }

        function hideDropdown() {
            clearTimeout(ddTimer);
            ddTimer = setTimeout(function() {
                ddMenu.style.display = 'none';
            }, 300);
        }

        // Hover on button
        ddBtn.addEventListener('mouseenter', showDropdown);
        ddBtn.addEventListener('mouseleave', hideDropdown);

        // Hover on menu itself
        ddMenu.addEventListener('mouseenter', function() {
            clearTimeout(ddTimer);
        });
        ddMenu.addEventListener('mouseleave', hideDropdown);

        // Click toggle as backup
        ddBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            if (ddMenu.style.display === 'block') {
                ddMenu.style.display = 'none';
            } else {
                showDropdown();
            }
        });

        // Close on outside click
        document.addEventListener('click', function(e) {
            if (ddMenu.style.display === 'block') {
                if (!ddBtn.contains(e.target) && !ddMenu.contains(e.target)) {
                    ddMenu.style.display = 'none';
                }
            }
        });

        // Reposition on scroll/resize
        window.addEventListener('scroll', function() {
            if (ddMenu.style.display === 'block') {
                positionDropdown();
            }
        });
        window.addEventListener('resize', function() {
            if (ddMenu.style.display === 'block') {
                positionDropdown();
            }
        });
    });
</script>
