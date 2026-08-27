@extends('layouts.app')

@section('content')
<div class='w-full flex flex-col bg-[#FFFFFF]'>
    <!-- Header Section -->
    <div class='relative overflow-hidden z-0'>
        <div class='absolute Page-background -z-10 w-full h-full'></div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-3 md:gap-4 xl:gap-5'>
                <div class='flex flex-col font-transducer font-normal Main-heading tracking-[-2.5px] uppercase'>
                    <div class='Animate-heading'>
                        <h3 class='flex flex-col'>
                            <span>This Is Not</span>
                            <span>just a Network.</span>
                        </h3>
                    </div>
                    <h3 class='max-w-[390px] md:max-w-[470px] xl:max-w-[570px] text-[#36A5C2]'>
                        It Is a Commercial Operating System.
                    </h3>
                </div>
                <p class='max-w-[460px] md:max-w-[580px] xl:max-w-[610px] font-normal Normal-text text-[#667980]'>
                    An integrated system combining data, entrepreneurial local leadership and coordination to drive performance.
                </p>
            </div>
        </div>
    </div>

    <!-- Intro Section -->
    <div class='Common-padding flex flex-col items-center'>
        <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[80px] md:gap-[100px] xl:gap-[120px]'>
            <div class='flex flex-col gap-8 xl:gap-10 font-normal Large-text text-[#667980]'>
                <p class='max-w-[630px] md:max-w-[740px] xl:max-w-[840px] font-normal Large-heading'>
                    <span class='text-[#36A5C2]'>A General Sales & Service Agent (GSSA)</span> enables airlines to access markets without the cost of building local sales and operational infrastructure.
                </p>
                <p class='flex flex-col gap-5 xl:gap-6'>
                    <span class='max-w-[580px] md:max-w-[710px] xl:max-w-[750px]'>It represents the airline, manages cargo activity and connects with the freight forwarding community in each territory.</span>
                    <span>That is the traditional model.</span>
                </p>
                <div class='flex flex-col gap-3 md:gap-4 xl:gap-5'>
                    <p class='max-w-[590px] md:max-w-[800px] xl:max-w-[840px] pl-3 md:pl-4 border-l-[2px] border-[#36A5C2]'>
                        Airlines no longer need just presence. They require revenue, service and measurable commercial performance.
                    </p>
                    <p class='max-w-[600px] md:max-w-[800px] xl:max-w-[850px] pl-3 md:pl-4 border-l-[2px] border-[#36A5C2]'>
                        ALG moves beyond representation, combining global infrastructure, entrepreneurial local leadership and commercial discipline to actively turn capacity into profit, market by market.
                    </p>
                </div>
            </div>
            
            <div class='w-full flex flex-col lg:flex-row gap-6 lg:gap-0 items-center lg:justify-between'>
                <div class='py-6 md:py-8 xl:py-10 px-10 xl:px-14 bg-[#F0F5F7] rounded-[16px] flex flex-col gap-3 md:gap-4 xl:gap-5 items-center font-normal Small-text'>
                    <p class='font-transducer text-[#9FACB1] tracking-[-0.5px] uppercase text-center'>
                        INPUT
                    </p>
                    <div class='shrink-0'>
                        <img src="{{ asset('Gssa-input-icon.svg') }}" alt="Icon" class='w-[35px] xl:w-[40px]' />
                    </div>
                    <p class='font-transducer font-medium Medium-text text-[#103440] tracking-[-0.5px] uppercase text-center'>
                        AIRLINES
                    </p>
                    <p class='text-[#667980] text-center whitespace-nowrap'>
                        Capacity · Commercial Goals
                    </p>
                </div>
                <div class='hidden lg:block w-full border-t-[2px] border-[#36A5C2] border-dashed'></div>
                <div class='py-6 md:py-8 xl:py-10 px-6 xl:px-12 bg-[#103440] rounded-[16px] flex flex-col gap-3 md:gap-4 xl:gap-5 items-center font-normal Small-text'>
                    <p class='font-transducer text-[#36A5C2] tracking-[-0.5px] uppercase text-center'>
                        THE INVISIBLE ENGINE
                    </p>
                    <div class='shrink-0 Rotate-image'>
                        <img src="{{ asset('Gssa-invisible-icon.svg') }}" alt="Icon" class='w-[120px] xl:w-[150px]' />
                    </div>
                    <div class='flex flex-col gap-2 items-center'>
                        <p class='font-transducer text-[#CEEBF2] tracking-[-0.5px] uppercase text-center'>
                            GSSA
                        </p>
                        <p class='font-transducer font-medium Medium-text text-[#FFFFFF] tracking-[-0.5px] uppercase text-center'>
                            AIR LOGISTICS GROUP
                        </p>
                    </div>
                    <p class='max-w-[280px] sm:max-w-full sm:flex sm:flex-col text-[#CEEBF2] text-center sm:whitespace-nowrap'>
                        <span>Market Intelligence · Vertical Sales · Exceptional</span>
                        <span>Customer Service · Market Presence</span>
                    </p>
                </div>
                <div class='hidden lg:block w-full border-t-[2px] border-[#36A5C2] border-dashed'></div>
                <div class='py-6 md:py-8 xl:py-10 px-4 xl:px-8 bg-[#F0F5F7] rounded-[16px] flex flex-col gap-3 md:gap-4 xl:gap-5 items-center font-normal Small-text'>
                    <p class='font-transducer text-[#9FACB1] tracking-[-0.5px] uppercase text-center'>
                        OUTPUT
                    </p>
                    <div class='shrink-0'>
                        <img src="{{ asset('Gssa-output-icon.svg') }}" alt="Icon" class='w-[35px] xl:w-[40px]' />
                    </div>
                    <p class='font-transducer font-medium Medium-text text-[#103440] tracking-[-0.5px] uppercase text-center'>
                        FREIGHT FORWARDERS
                    </p>
                    <p class='text-[#667980] text-center whitespace-nowrap'>
                        Bookings · Revenue · Market Access
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Category Section -->
    <div>
        <div class='Common-padding flex flex-col items-center bg-[#F0F5F7]'>
            <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col items-center gap-[30px] md:gap-[40px] xl:gap-[50px]'>
                <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
                    <p class='font-transducer font-medium Medium-text text-[#36A5C2] uppercase text-center'>
                        THE GAP
                    </p>
                    <h3 class='max-w-[370px] md:max-w-[520px] xl:max-w-[660px] font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center'>
                        A Category Built on Presence, Not Performance.
                    </h3>
                </div>
                <div class='flex flex-col gap-6 xl:gap-8 items-center font-normal Large-text text-[#667980] text-center'>
                    <p>
                        Most GSSAs sell presence. Airlines need results.
                    </p>
                    <p class='max-w-[480px] md:max-w-[670px] xl:max-w-[710px]'>
                        The traditional GSSA model is built on visibility. Offices, relationships and activity across multiple markets create reassurance, not revenue.
                    </p>
                    <p class='max-w-[480px] md:max-w-[680px] xl:max-w-[720px]'>
                        Airlines are measured on outcomes. Revenue delivered. Results achieved. Capacity converted swiftly in dynamic market conditions.
                    </p>
                    <p class='flex flex-col items-center'>
                        <span>This is where the model breaks.</span>
                        <span class='font-semibold'>Representation maintains presence. Execution drives performance.</span>
                    </p>
                    <p class='font-semibold text-[#103440]'>
                        Capacity without performance is lost revenue.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Section -->
    <div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] pt-[70px] md:pt-[80px] xl:pt-[100px] pb-[50px] md:pb-[60px] xl:pb-[80px] flex flex-col gap-[70px] md:gap-[80px] xl:gap-[100px] items-center'>
                <div class='flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px] items-center'>
                    <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
                        <p class='font-transducer font-medium Medium-text text-[#36A5C2] uppercase text-center'>
                            WHY CHOOSE ALG
                        </p>
                        <h3 class='max-w-[410px] md:max-w-[580px] xl:max-w-[690px] font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center'>
                            The Invisible Engine Behind Global Air Cargo Performance.
                        </h3>
                    </div>
                    <div class='w-full xl:w-[730px] border-[1px] border-[#1034401A] flex flex-col rounded-[16px]'>
                        <div class='py-4 flex gap-2 md:gap-5 xl:gap-6 items-center justify-between font-semibold Medium-text text-[#CEEBF2] bg-[#103440] rounded-t-[16px]'>
                            <div class='w-full'>
                                <span class='pl-3 md:pl-8 xl:pl-10'>Where others...</span>
                            </div>
                            <div class='w-fit shrink-0 Large-text text-[#36A5C2]'>
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                            </div>
                            <div class='w-full'>
                                <span>ALG...</span>
                            </div>
                        </div>
                        <div class='flex flex-col divide-y-[1px] divide-[#1034401A] bg-[#F0F5F7] rounded-b-[16px]'>
                            @php
                            $performance = [
                                ["others" => "represent capacity", "alg" => "builds markets."],
                                ["others" => "sell space", "alg" => "drives yield."],
                                ["others" => "report activity", "alg" => "delivers outcomes."],
                                ["others" => "scale through systems", "alg" => "scales through execution."],
                            ];
                            @endphp
                            @foreach($performance as $item)
                            <div class='py-4 flex gap-2 md:gap-5 xl:gap-6 items-center justify-between font-normal Medium-text text-[#667980]'>
                                <div class='w-full'>
                                    <span class='pl-3 md:pl-8 xl:pl-10'>{{ $item['others'] }}</span>
                                </div>
                                <div class='w-fit shrink-0 Large-text text-[#36A5C2]'>
                                    <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </div>
                                <div class='w-full'>
                                    <span>{{ $item['alg'] }}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class='w-full relative overflow-hidden z-0 rounded-[16px]'>
                    <div class='absolute Gssa-card-background -z-10 w-full h-full'></div>
                    <div class='py-[50px] md:py-[60px] xl:py-[70px] px-3 md:px-5 flex flex-col gap-8 xl:gap-10 items-center'>
                        <h5 class='max-w-[440px] md:max-w-[490px] xl:max-w-[530px] font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center'>
                            Ready to outsource your cargo sales to a proven commercial partner?
                        </h5>
                        <button class="w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button">
                            Talk to ALG
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
