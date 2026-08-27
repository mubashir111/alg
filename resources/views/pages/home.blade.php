@extends('layouts.app')

@section('content')
<div class="flex flex-col">

    <!-- Hero Section -->
    <div class='mt-[76px] md:mt-[78px] xl:mt-[82px] mx-2 relative overflow-hidden z-0 rounded-[16px]'>
        <div class='absolute HeroSection-background -z-10 w-full h-full'></div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] py-[180px] md:py-[200px] lg:py-[220px] xl:py-[240px] flex flex-col gap-5 xl:gap-6'>
                <div class="fade-in-up">
                    <h1 class='max-w-[360px] md:max-w-[430px] xl:max-w-[550px] font-transducer font-normal Main-heading text-[#FFFFFF] tracking-[-2.5px]'>
                        THE INVISIBLE ENGINE OF GLOBAL TRADE
                    </h1>
                </div>
                <div class="fade-in-up delay-300">
                    <p class='max-w-[430px] md:max-w-[450px] xl:max-w-[470px] font-normal Large-text text-[#FFFFFF]'>
                        We power airline commercial performance in 60+ countries, utilising a proven model to deliver market growth and measurable results.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Animation -->
    <div class='flex flex-col items-center'>
        <div class='w-full max-w-[1700px] py-8 md:py-10 flex flex-col'>
            <!-- BrandAnimationOne -->
            <div class="relative w-full overflow-hidden mb-4">
                <div class="flex AminationOne-scroll">
                    @for($i = 0; $i < 4; $i++)
                        @foreach(['one', 'two', 'three', 'four', 'five', 'six'] as $img)
                            <div class="shrink-0">
                                <img src="{{ asset('BrandAnimationOne-image-' . $img . '.svg') }}" alt="Icon" class="w-[150px] md:w-[160px] lg:w-[180px] xl:w-[200px]" />
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
            <!-- BrandAnimationTwo -->
            <div class="relative w-full overflow-hidden">
                <div class="flex AminationTwo-scroll">
                    @for($i = 0; $i < 4; $i++)
                        @foreach(['one', 'two', 'three', 'four', 'five', 'six', 'seven'] as $img)
                            <div class="shrink-0">
                                <img src="{{ asset('BrandAnimationTwo-image-' . $img . '.svg') }}" alt="Icon" class="w-[150px] md:w-[160px] lg:w-[180px] xl:w-[200px]" />
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <!-- Global Scale -->
    <div class='flex flex-col items-center bg-[#FFFFFF]'>
        <div class='w-full max-w-[1700px] grid grid-cols-1 lg:grid-cols-8'>
            <div class='lg:col-span-3 h-full pl-3 sm:pl-5 md:pl-[30px] lg:pl-10 xl:pl-20 py-8 md:py-10 bg-[#F0F5F7]'>
                <h3 class='max-w-[200px] md:max-w-[270px] xl:max-w-[350px] font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase'>
                    Execution with global scale
                </h3>
            </div>
            <div class='lg:col-span-5 h-[300px] md:h-[380px] lg:h-[525px] w-full'>
                <!-- GlobalScaleAnimation -->
                <div class="gs-container">
                    @php
                        $sections = [
                            ['icon' => 'one', 'num' => '135+', 'label' => 'Airline Partners', 'bg' => '#7FC5D8'],
                            ['icon' => 'two', 'num' => '100', 'label' => 'Offices', 'bg' => '#36A5C2'],
                            ['icon' => 'three', 'num' => '60+', 'label' => 'Countries', 'bg' => '#26758B'],
                            ['icon' => 'four', 'num' => '$500M+', 'label' => 'Annual Sales', 'bg' => '#174958'],
                            ['icon' => 'five', 'num' => '550,000+', 'label' => 'AWBs Annually', 'bg' => '#103440'],
                        ];
                    @endphp
                    
                    @foreach($sections as $index => $section)
                    <div class="gs-card {{ $index === 0 ? 'active' : '' }}">
                        <!-- Arrow overlay -->
                        <div class="gs-arrow p-3 md:p-5 lg:p-8 xl:p-10" style="background-color: {{ $section['bg'] }};">
                            <svg stroke="none" fill="currentColor" viewBox="0 0 24 24" class="w-[28px] md:w-[34px] lg:w-[40px] h-[28px] md:h-[34px] lg:h-[40px] text-[#FFFFFF]" xmlns="http://www.w3.org/2000/svg"><path d="M5.22 5.22a.75.75 0 0 1 1.06 0L18 16.94V11a.75.75 0 0 1 1.5 0v7.5a.75.75 0 0 1-.75.75H11.25a.75.75 0 0 1 0-1.5h5.94L5.22 6.28a.75.75 0 0 1 0-1.06z"></path></svg>
                        </div>
                        <!-- Content -->
                        <div class="gs-content">
                            <div class="h-full w-full relative overflow-hidden z-0">
                                <div class="absolute GlobalScale-background-{{ $section['icon'] }} -z-10" style="inset:0;width:100%;height:100%;"></div>
                                <div class="h-full w-full p-3 md:p-5 lg:p-8 xl:p-10 flex flex-col gap-10 justify-between relative z-10">
                                    <div class="shrink-0">
                                        <img src="{{ asset('GlobalScale-icon-' . $section['icon'] . '.svg') }}" alt="{{ $section['label'] }}" class="w-[25px] md:w-[30px] xl:w-[40px] h-auto object-contain" />
                                    </div>
                                    <p class="flex flex-col gap-2 font-normal text-[#FFFFFF]">
                                        <span class="font-transducer Main-heading tracking-[-2.5px]">{{ $section['num'] }}</span>
                                        <span class="Small-heading">{{ $section['label'] }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Results -->
    <div class='Common-padding flex flex-col items-center bg-[#FFFFFF]'>
        <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[60px] md:gap-[70px] xl:gap-[80px] items-center'>
            <h3 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] text-center'>
                PEOPLE POWERED EXCELLENCE
            </h3>
            <div class='w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10'>
                @php
                    $results = [
                        ['icon' => 'one', 'title' => 'Global Network. Local Authority.', 'desc' => '100 fully owned offices across 60+ countries, delivering aligned execution in the markets that matter most to airline cargo revenue performance.'],
                        ['icon' => 'two', 'title' => 'Service That Performs.', 'desc' => 'Structured support aligned to airline and freight forwarder requirements, delivering clarity, responsiveness and consistent commercial execution.'],
                        ['icon' => 'three', 'title' => 'Built by Air Cargo Experts.', 'desc' => 'A global team of experienced cargo professionals combining commercial understanding with local market intelligence.'],
                        ['icon' => 'four', 'title' => 'Data-Led Commercial Strategy.', 'desc' => 'Dynamic sales, pricing and market intelligence designed to support stronger commercial outcomes.'],
                        ['icon' => 'five', 'title' => 'Transparent. Accountable. Trusted.', 'desc' => 'Clear reporting, disciplined governance and a financially robust operating model built around long-term airline partnerships.'],
                        ['icon' => 'six', 'title' => 'Solutions That Drive Growth.', 'desc' => 'Tailored commercial strategies designed to strengthen performance, improve market penetration and unlock opportunity.'],
                    ];
                @endphp
                
                @foreach($results as $index => $res)
                <div class="fade-in-up" style="animation-delay: {{ $index * 0.2 }}s; opacity: 0; animation-fill-mode: forwards;">
                    <div class='h-full pl-6 border-l-[2px] border-[#F0F5F7] flex flex-col gap-7 md:gap-8 xl:gap-10'>
                        <div class='shrink-0'>
                            <img src="{{ asset('Results-icon-' . $res['icon'] . '.svg') }}" alt="Icon" class='w-[56px]' />
                        </div>
                        <div class='flex flex-col gap-4 md:gap-5 xl:gap-6'>
                            <h5 class='max-w-[260px] font-transducer font-medium Large-text text-[#36A5C2] tracking-[-1px] uppercase'>
                                {{ $res['title'] }}
                            </h5>
                            <p class='max-w-[350px] xl:max-w-[370px] font-normal Medium-text text-[#667980]'>
                                {{ $res['desc'] }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Connect -->
    <div class='Common-padding flex flex-col items-center bg-[#FFFFFF]'>
        <div class='w-full max-w-[1700px] py-[50px] md:py-[60px] xl:py-[80px] flex flex-col gap-8 xl:gap-10 items-center'>
            <div class="fade-in-up">
                <h3 class='max-w-[550px] sm:max-w-full sm:flex sm:flex-col font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center'>
                    <span>Commercial performance delivered</span>
                    <span>through global coordination, local expertise</span>
                    <span>and disciplined execution.</span>
                </h3>
            </div>
            <div class="fade-in-up delay-300">
                <div class='flex flex-wrap gap-2.5 items-center justify-center'>
                    <button onclick="openContactModal()" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
                        Connect with us
                    </button>
                    <a href="{{ asset('/ALG-Corporate%20Profile.pdf') }}" download="ALG-Corporate Profile.pdf" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] Border-button'>
                        Download Company Profile
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

<style>
    /* ===== Fade-in Animation ===== */
    .fade-in-up {
        animation: fadeInUp 0.6s ease-out forwards;
    }
    .delay-300 {
        animation-delay: 0.3s;
        opacity: 0;
    }
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== GlobalScale Accordion ===== */
    .gs-container {
        display: flex;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .gs-card {
        flex: 1;
        position: relative;
        min-width: 0;
        height: 100%;
        overflow: hidden;
        transition: flex-grow .6s ease;
        cursor: pointer;
    }

    .gs-card.active {
        flex-grow: 5;
    }

    .gs-arrow {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        transition: .4s;
        z-index: 2;
    }

    .gs-card.active .gs-arrow {
        opacity: 0;
        pointer-events: none;
    }

    .gs-card:not(.active) .gs-arrow {
        opacity: 1;
        pointer-events: none;
    }

    .gs-content {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transform: translateY(24px);
        transition: .5s;
        pointer-events: none;
    }

    .gs-card.active .gs-content {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }
</style>

<script>
/* IntersectionObserver for fade-in animations */
(function() {
    function initFade() {
        var obs = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) e.target.style.animationPlayState = 'running';
            });
        });
        document.querySelectorAll('.fade-in-up').forEach(function(el) {
            el.style.animationPlayState = 'paused';
            obs.observe(el);
        });
    }
    
    function initAccordion() {
        console.log("Accordion initialized");
        const cards = document.querySelectorAll(".gs-card");
        const container = document.querySelector(".gs-container");

        console.log("Cards count:", cards.length);
        console.log("Container:", container);

        if (cards.length > 0 && container) {
            cards.forEach((card, index) => {
                card.addEventListener("mouseenter", () => {
                    console.log("Hover", index);
                    cards.forEach(c => c.classList.remove("active"));
                    card.classList.add("active");
                });
            });

            container.addEventListener("mouseleave", () => {
                cards.forEach(c => c.classList.remove("active"));
                cards[0].classList.add("active");
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initFade();
            initAccordion();
        });
    } else {
        initFade();
        initAccordion();
    }
})();
</script>
@endsection

