@php
    $currentRoute = request()->path();
    
    function isActiveFooter($href, $currentRoute) {
        $path = $href === '/' ? '/' : ltrim($href, '/');
        if ($path === '/') {
            return $currentRoute === '/';
        }
        return strpos($currentRoute, $path) === 0;
    }

    $quickLinks = [
        ['href' => '/', 'name' => 'Home'],
        ['href' => '/about-us', 'name' => 'About Us'],
        ['href' => '/gssa', 'name' => 'What is a GSSA?'],
        ['href' => '/services', 'name' => 'Services'],
        ['href' => '/global-network', 'name' => 'Global Network'],
        ['href' => '/news', 'name' => 'News'],
        ['href' => '/leadership', 'name' => 'Leadership'],
        ['href' => '/careers', 'name' => 'Careers'],
    ];

    $footLinks = [
        ['href' => '/privacy-policy', 'name' => 'Privacy Policy'],
        ['href' => '/cookie-policy', 'name' => 'Cookie Policy'],
    ];
@endphp

<div class='relative overflow-hidden z-0'> 
    <div class='absolute Footer-background -z-10 w-full h-full'></div>
    <div class='Common-padding flex flex-col items-center'>
        <div class='w-full max-w-[1700px] pt-[60px] md:pt-[70px] xl:pt-[80px] pb-8 xl:pb-10 flex flex-col gap-16 md:gap-[80px] lg:gap-[160px] xl:gap-[200px]'>
            <div class='w-full grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-10'>
                <div class='flex flex-col gap-5 md:gap-6 lg:gap-8'>
                    <a href="{{ url('/') }}" class='w-fit cursor-pointer'>
                        <img src="{{ asset('Footer-logo.svg') }}" alt="ALG - Air Logistics Group" class='w-[220px] md:w-[240px] xl:w-[260px]' />
                    </a>
                    <p class='max-w-[310px] md:max-w-[340px] xl:max-w-[360px] font-normal Medium-text text-[#103440]'>
                        A leading global GSSA delivering customised, high-yield outsourced cargo solutions.
                    </p>
                </div>
                <div class='w-full grid grid-cols-1 sm:grid-cols-2 gap-8'>
                    <div class='flex flex-col gap-4 sm:gap-5 lg:gap-6'>
                        <p class='font-transducer font-medium Medium-text text-[#103440]'>
                            QUICK LINKS
                        </p>
                        <div class='flex flex-col gap-2'>
                            @foreach($quickLinks as $item)
                                <a href="{{ url($item['href']) }}" class="w-fit font-normal Medium-text hover:font-semibold text-[#103440] Hover-effect cursor-pointer">
                                    {{ $item['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class='flex flex-col gap-4 sm:gap-5 lg:gap-6'>
                        <p class='font-transducer font-medium Medium-text text-[#103440]'>
                            CONNECT
                        </p>
                        <div class='flex flex-col gap-5 sm:gap-12 md:gap-14 xl:gap-16'>
                            <div class='flex flex-col gap-2'>
                                <a href="tel:+4401332850021" class='w-fit font-normal Medium-text hover:font-semibold text-[#103440] Hover-effect cursor-pointer'>
                                    +44 01332 850021
                                </a>
                                <a href="mailto:info@airlogisticsgroup.com" class='w-fit font-normal Medium-text hover:font-semibold text-[#103440] Hover-effect cursor-pointer'>
                                    info@airlogisticsgroup.com
                                </a>
                            </div>
                            <a href="https://www.linkedin.com/company/air-logistics-group/" target="_blank" rel="noopener noreferrer" class='w-fit p-2 flex gap-2 items-center font-transducer font-medium Medium-text text-[#103440] hover:text-[#FFFFFF] bg-[#CEEBF2] hover:bg-[#103440] Hover-effect rounded-[8px] cursor-pointer'>
                                <svg class='Normal-text' stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                                <span>LINKEDIN</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='w-full flex flex-col gap-5'>
                <div class='w-full border-t-[1px] border-[#103440] opacity-25'></div>
                <div class='flex flex-col sm:flex-row gap-4 items-center sm:justify-between'>
                    <p class='font-normal Little-text text-[#103440]'>
                        © 2026 ALG. All Rights Reserved.
                    </p>
                    <div class='flex gap-6 items-center'>
                        @foreach($footLinks as $item)
                            <a href="{{ url($item['href']) }}" class="w-fit font-normal Little-text hover:font-semibold text-[#103440] Hover-effect cursor-pointer">
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
