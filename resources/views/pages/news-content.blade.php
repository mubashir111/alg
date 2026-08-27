@extends('layouts.app')

@section('title', 'News Content - ALG')

@section('content')
<div class='Common-padding flex flex-col items-center bg-gradient-to-b from-[#F1F6F8] via-[#FFFFFF] to-[#FFFFFF]'>
    <div class='w-full max-w-[1700px] pt-[90px] md:pt-[100px] xl:pt-[120px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-8 md:gap-10 xl:gap-12'>
        <div class="flex flex-col gap-8">
            <div class="flex gap-5 items-center justify-between">
                <a href="{{ url('/news') }}" class='w-fit flex gap-2 items-center font-medium Medium-text text-[#36A5C2] hover:text-[#103440] Hover-effect cursor-pointer'>
                    <!-- FiArrowLeft -->
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> 
                    <span>BACK</span>
                </a>
                <p class="flex items-center gap-2 Medium-text text-[#667980]">
                    <!-- FiCalendar -->
                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                    <span>June 28, 2026</span>
                </p>
            </div>
            <div class="flex flex-col gap-8 xl:gap-10">
                <h3 class='font-transducer font-medium Sub-heading text-[#103440] tracking-[-2.5px] uppercase lg:pr-[5%] xl:pr-[10%]'>
                    Lorem ipsum dolor sit amet consectetur. Faucibus adipiscing posuere sem purus faucibus pretium.
                </h3>
                <div class="w-full h-[500px] rounded-[16px] overflow-hidden">
                    <img src="{{ asset('HeroSection-bg-image.png') }}" alt="Image" class='w-full h-full object-cover' />
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center">
            <div class="w-full max-w-[900px]">
                <div class='post-content'>
                    Contents
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
