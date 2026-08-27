@extends('layouts.app')

@section('content')
<div class='w-full flex flex-col bg-[#FFFFFF]'>
    <!-- Header Section -->
    <div class='relative overflow-hidden z-0'>
        <div class='absolute Page-background -z-10 w-full h-full'></div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px]'>
                <div class='flex flex-col gap-3 md:gap-4 xl:gap-5'>
                    <h3 class='font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading'>
                        News
                    </h3>
                    <p class='max-w-[440px] md:max-w-[470px] xl:max-w-[500px] font-normal Normal-text text-[#667980]'>
                        Discover updates, expert insights, and deep dive articles on global forwarding and supply chain innovation.
                    </p>
                </div>
                <div class='w-full md:w-[580px] xl:w-[600px] p-3 xl:p-4 border-[1px] border-[#1034400D] flex gap-3 items-center bg-[#F0F5F7] rounded-[8px]'>
                    <div class='Small-text text-[#667980]'>
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <input type='text' placeholder='Search articles...' class='w-full font-normal Small-text text-[#103440] placeholder:text-[#9FACB1] focus:outline-none bg-transparent' />
                </div>
            </div>
        </div>
    </div>

    <!-- Latest News Section -->
    <div class='Common-padding flex flex-col items-center'>
        <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px]'>
            <div class='w-full flex flex-col gap-[50px] md:gap-[30px] xl:gap-5'>
                <div class='grid grid-cols-1 lg:grid-cols-3 gap-8 xl:gap-10'>
                    <div class='lg:col-span-2 w-full flex flex-col gap-6 md:gap-8 xl:gap-10'>
                        <div class='h-[250px] lg:h-[505px] xl:h-[540px] w-full rounded-[16px] overflow-hidden'>
                            <img src="{{ asset('HeroSection-bg-image.png') }}" alt="Image" class='w-full h-full object-cover' />
                        </div>
                        <div class='flex flex-col gap-4 md:gap-6 xl:gap-8'>
                            <div class='flex flex-col gap-3 xl:gap-4'>
                                <p class='flex gap-2 items-center font-normal Medium-text text-[#667980]'>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <span>Nov 25, 2025</span>
                                </p>
                                <h5 class='font-semibold Sub-heading text-[#103440] line-clamp-2'>
                                    Rolls-Royce tests new engine-protection tech that cuts downtime
                                </h5>
                            </div>
                            <p class='font-normal Normal-text text-[#667980] line-clamp-3'>
                                Rolls-Royce trials an on-engine protection system designed to limit damage from FOD and extreme weather, aiming to extend engine service windows and cut unscheduled ground time.
                            </p>
                        </div>
                        <a href="{{ url('/news/content') }}" class='w-fit py-3 px-6 font-normal tracking-[0.2px] Medium-text BD-button'>
                            Read More
                        </a>
                    </div>
                    <div class='lg:col-span-1 lg:h-fit w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-6 xl:gap-8'>
                        <div class='w-full lg:h-fit p-3 md:p-5 flex flex-col gap-3 xl:gap-4 bg-[#F0F5F7] rounded-[16px]'>
                            <p class='font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase'>
                                Topics
                            </p>
                            <div class='w-full border-t-[1px] border-[#1034401A]'></div>
                            <div class='w-full flex flex-col gap-2' id="news-tabs">
                                <button data-target="all" class='tab-btn w-full p-3 flex gap-2 items-center tracking-[0.2px] rounded-[8px] cursor-pointer font-semibold bg-[#FFFFFF] text-[#103440]'>
                                    <span class='text-[18px] xl:text-[20px] text-[#36A5C2] icon-wrapper'><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M128,152a8,8,0,0,1-8,8H48a8,8,0,0,1,0-16h72A8,8,0,0,1,128,152Zm-8-48H48a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Zm117.66-21.66-32-32a8,8,0,0,0-11.32,11.32L212.69,80l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,82.34Zm0,64-32-32a8,8,0,0,0-11.32,11.32L212.69,144l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,146.34Zm0,64-32-32a8,8,0,0,0-11.32,11.32L212.69,208l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,210.34ZM120,200H48a8,8,0,0,0,0,16h72a8,8,0,0,0,0-16Z"></path></svg></span>
                                    <span class='Medium-text'>All</span>
                                </button>
                                <button data-target="industryNews" class='tab-btn w-full p-3 flex gap-2 items-center tracking-[0.2px] rounded-[8px] cursor-pointer font-normal hover:bg-[#FFFFFF] Hover-effect text-[#103440]'>
                                    <span class='text-[18px] xl:text-[20px] text-[#667980] icon-wrapper'><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M242.79,150.31,196,146a8,8,0,0,1-5.75-3.32L159.9,101.4a16.14,16.14,0,0,0-6.24-5.35l-29-14a8,8,0,0,1,6.86-14.39l28.69,13.73A32,32,0,0,1,172.58,92L201,131.79l42.66,3.93a8,8,0,0,1,.73,15.93A8.47,8.47,0,0,1,242.79,150.31Zm-226.7,2.83,61-8.58L104.91,66.52A24.1,24.1,0,0,1,128.53,48h18A48.05,48.05,0,0,1,194.49,96l-7,7-39.73-39.73a8,8,0,1,0-11.31,11.31L179.6,117.84l-23,23A39.42,39.42,0,0,0,145.47,169L139.7,185a8,8,0,0,1-15,.48L112.56,152,78,162a24.16,24.16,0,0,1-11.51.58L12.72,148.6a8,8,0,1,1,3.37-15.63ZM183.17,103.52a32.06,32.06,0,0,0-36.69-39.52v0h-18A8,8,0,0,0,120.61,70l-23,63.15,22.84,54.8-5.32,14.81L104.22,176a23.46,23.46,0,0,0,6.6-16.73l6.47-17.85Z"></path></svg></span>
                                    <span class='Medium-text'>Industry News</span>
                                </button>
                                <button data-target="pressReleases" class='tab-btn w-full p-3 flex gap-2 items-center tracking-[0.2px] rounded-[8px] cursor-pointer font-normal hover:bg-[#FFFFFF] Hover-effect text-[#103440]'>
                                    <span class='text-[18px] xl:text-[20px] text-[#667980] icon-wrapper'><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M216,40H160a24,24,0,0,0-24,24V200a8,8,0,0,0,8,8h72a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,152H152V64a8,8,0,0,1,8-8h56Zm-96-32H40V56a16,16,0,0,1,16-16h64a8,8,0,0,1,8,8ZM104,56V192H48a16,16,0,0,1-16-16V56A16,16,0,0,1,48,40h56Zm-16,32a8,8,0,0,1-8,8H56a8,8,0,0,1,0-16H80A8,8,0,0,1,88,88Zm0,32a8,8,0,0,1-8,8H56a8,8,0,0,1,0-16H80A8,8,0,0,1,88,120Zm96-24H160a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Zm0,32H160a8,8,0,0,1,0-16h24a8,8,0,0,1,0,16Z"></path></svg></span>
                                    <span class='Medium-text'>Press Releases</span>
                                </button>
                            </div>
                        </div>
                        <div class='w-full p-3 md:p-5 flex flex-col gap-3 xl:gap-4 bg-[#F0F5F7] rounded-[16px]'>
                            <p class='font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase'>
                                Downloads
                            </p>
                            <div class='w-full border-t-[1px] border-[#1034401A]'></div>
                            <div class='flex flex-col gap-2'>
                                <button class='group w-full p-3 flex gap-2 items-center font-normal Medium-text text-[#103440] hover:text-[#36A5C2] tracking-[0.2px] hover:bg-[#FFFFFF] Hover-effect rounded-[8px] cursor-pointer'>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-[#667980] group-hover:text-[#36A5C2]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span>Download Company Profile</span>
                                </button>
                                <button class='group w-full p-3 flex gap-2 items-center font-normal Medium-text text-[#103440] hover:text-[#36A5C2] tracking-[0.2px] hover:bg-[#FFFFFF] Hover-effect rounded-[8px] cursor-pointer'>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-[#667980] group-hover:text-[#36A5C2]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span>Download Logo Files</span>
                                </button>
                                <button class='group w-full p-3 flex gap-2 items-center font-normal Medium-text text-[#103440] hover:text-[#36A5C2] tracking-[0.2px] hover:bg-[#FFFFFF] Hover-effect rounded-[8px] cursor-pointer'>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="text-[#667980] group-hover:text-[#36A5C2]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span>Download Brand Guidelines</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                $allNews = [
                    [
                        "image" => "/HeroSection-bg-image.png",
                        "date" => "Nov 18, 2025",
                        "heading" => "Airline fleet moves: narrowbodies repurposed for high-yield cargo runs",
                        "description" => "Airlines are reallocating narrowbody frames to priority cargo routes, shifting capacity away from belly space and changing the balance of available",
                    ],
                    [
                        "image" => "/HeroSection-bg-image.png",
                        "date" => "Nov 11, 2025",
                        "heading" => "Tech in practice: predictive maintenance reduces ground time",
                        "description" => "Operators using predictive engine and chassis monitoring report faster interventions and lower unscheduled failures. That lowers total",
                    ],
                    [
                        "image" => "/HeroSection-bg-image.png",
                        "date" => "Nov 04, 2025",
                        "heading" => "Wholesaler wins: digital rate transparency changes negotiation power",
                        "description" => "Open wholesale platforms exposing live rates are compressing the traditional broker margin model and forcing faster quote turnaround...",
                    ],
                ];

                $industryNews = [
                    [
                        "image" => "/HeroSection-bg-image.png",
                        "date" => "Nov 11, 2025",
                        "heading" => "Tech in practice: predictive maintenance reduces ground time",
                        "description" => "Operators using predictive engine and chassis monitoring report faster interventions and lower unscheduled failures. That lowers total",
                    ],
                ];

                $pressReleases = [
                    [
                        "image" => "/HeroSection-bg-image.png",
                        "date" => "Nov 04, 2025",
                        "heading" => "Wholesaler wins: digital rate transparency changes negotiation power",
                        "description" => "Open wholesale platforms exposing live rates are compressing the traditional broker margin model and forcing faster quote turnaround...",
                    ],
                ];
                @endphp

                <!-- Tab Contents -->
                <div id="tab-content-all" class="tab-pane block">
                    <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-7 xl:gap-10'>
                        @foreach($allNews as $item)
                        <div class="md:mt-[20px] xl:mt-[60px] flex flex-col gap-5 md:gap-6 xl:gap-7">
                            <div class="h-[260px] w-full rounded-[16px] overflow-hidden">
                                <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="Image" class='w-full h-full object-cover' />
                            </div>
                            <div class='flex flex-col gap-3 md:gap-4 xl:gap-5'>
                                <div class='flex flex-col gap-2 xl:gap-4'>
                                    <p class='flex gap-2 items-center font-normal Medium-text text-[#667980]'>
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span>{{ $item['date'] }}</span>
                                    </p>
                                    <h5 class='font-semibold Large-text text-[#103440] line-clamp-2'>
                                        {{ $item['heading'] }}
                                    </h5>
                                </div>
                                <p class='font-normal Medium-text text-[#667980] line-clamp-3'>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                            <a href="{{ url('/news/content') }}" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
                                Read More
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="tab-content-industryNews" class="tab-pane hidden">
                    <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-7 xl:gap-10'>
                        @foreach($industryNews as $item)
                        <div class="md:mt-[20px] xl:mt-[60px] flex flex-col gap-5 md:gap-6 xl:gap-7">
                            <div class="h-[260px] w-full rounded-[16px] overflow-hidden">
                                <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="Image" class='w-full h-full object-cover' />
                            </div>
                            <div class='flex flex-col gap-3 md:gap-4 xl:gap-5'>
                                <div class='flex flex-col gap-2 xl:gap-4'>
                                    <p class='flex gap-2 items-center font-normal Medium-text text-[#667980]'>
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span>{{ $item['date'] }}</span>
                                    </p>
                                    <h5 class='font-semibold Large-text text-[#103440] line-clamp-2'>
                                        {{ $item['heading'] }}
                                    </h5>
                                </div>
                                <p class='font-normal Medium-text text-[#667980] line-clamp-3'>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                            <a href="{{ url('/news/content') }}" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
                                Read More
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div id="tab-content-pressReleases" class="tab-pane hidden">
                    <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-7 xl:gap-10'>
                        @foreach($pressReleases as $item)
                        <div class="md:mt-[20px] xl:mt-[60px] flex flex-col gap-5 md:gap-6 xl:gap-7">
                            <div class="h-[260px] w-full rounded-[16px] overflow-hidden">
                                <img src="{{ asset(ltrim($item['image'], '/')) }}" alt="Image" class='w-full h-full object-cover' />
                            </div>
                            <div class='flex flex-col gap-3 md:gap-4 xl:gap-5'>
                                <div class='flex flex-col gap-2 xl:gap-4'>
                                    <p class='flex gap-2 items-center font-normal Medium-text text-[#667980]'>
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        <span>{{ $item['date'] }}</span>
                                    </p>
                                    <h5 class='font-semibold Large-text text-[#103440] line-clamp-2'>
                                        {{ $item['heading'] }}
                                    </h5>
                                </div>
                                <p class='font-normal Medium-text text-[#667980] line-clamp-3'>
                                    {{ $item['description'] }}
                                </p>
                            </div>
                            <a href="{{ url('/news/content') }}" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
                                Read More
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-btn');
        const panes = document.querySelectorAll('.tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-target');

                // Reset all tabs
                tabs.forEach(t => {
                    t.classList.remove('font-semibold', 'bg-[#FFFFFF]');
                    t.classList.add('font-normal', 'hover:bg-[#FFFFFF]', 'Hover-effect');
                    const iconWrap = t.querySelector('.icon-wrapper');
                    if (iconWrap) {
                        iconWrap.classList.remove('text-[#36A5C2]');
                        iconWrap.classList.add('text-[#667980]');
                    }
                });

                // Set active tab
                tab.classList.add('font-semibold', 'bg-[#FFFFFF]');
                tab.classList.remove('font-normal', 'hover:bg-[#FFFFFF]', 'Hover-effect');
                const activeIcon = tab.querySelector('.icon-wrapper');
                if (activeIcon) {
                    activeIcon.classList.add('text-[#36A5C2]');
                    activeIcon.classList.remove('text-[#667980]');
                }

                // Show target pane
                panes.forEach(pane => {
                    if (pane.id === `tab-content-${target}`) {
                        pane.classList.remove('hidden');
                        pane.classList.add('block');
                    } else {
                        pane.classList.remove('block');
                        pane.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endsection
