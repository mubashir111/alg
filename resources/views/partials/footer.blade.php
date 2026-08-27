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
                                <a href="{{ url($item['href']) }}" class="w-fit font-normal Medium-text cursor-pointer {{ isActiveFooter($item['href'], $currentRoute) ? 'font-semibold text-[#FFFFFF]' : 'text-[#103440] hover:text-[#FFFFFF] Hover-effect' }}">
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
                                <a href="tel:+4401332850021" class='w-fit font-normal Medium-text text-[#103440] hover:text-[#FFFFFF] Hover-effect cursor-pointer'>
                                    +44 01332 850021
                                </a>
                                <a href="mailto:info@airlogisticsgroup.com" class='w-fit font-normal Medium-text text-[#103440] hover:text-[#FFFFFF] Hover-effect cursor-pointer'>
                                    info@airlogisticsgroup.com
                                </a>
                            </div>
                            <a href="#" class='w-fit p-2 flex gap-2 items-center font-transducer font-medium Medium-text text-[#103440] hover:text-[#FFFFFF] bg-[#CEEBF2] hover:bg-[#103440] Hover-effect rounded-[8px] cursor-pointer'>
                                <svg class='Normal-text' stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg> <span>LINKEDIN</span>
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
                            <a href="{{ url($item['href']) }}" class="w-fit font-normal Little-text cursor-pointer {{ isActiveFooter($item['href'], $currentRoute) ? 'font-semibold text-[#FFFFFF]' : 'text-[#103440] hover:text-[#FFFFFF] Hover-effect' }}">
                                {{ $item['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
