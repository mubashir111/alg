@extends('layouts.app')

@php
    $json = file_get_contents(resource_path('js/global-network-data.json'));
    $data = json_decode($json, true);
    
    // Order of regions as per React app
    $regionOrder = [
        "Europe",
        "Americas",
        "Asia & Middle East",
        "Africa",
        "Australasia"
    ];

    $pillars = [
        'Empowered local leaders', 
        'Direct customer access', 
        'Commercial accountability'
    ];

    $headOfficers = [
        [
            "title" => "Senior Management",
            "number" => "5",
            "members" => [
                [
                    "name" => "Stephen Dawkins",
                    "post" => "Chief Executive Officer",
                    "email" => "info@airlogisticsgroup.com",
                ],
                [
                    "name" => "Helmut Mair",
                    "post" => "Managing Director",
                    "email" => "helmut.mair@airlogisticsgroup.com",
                ],
                [
                    "name" => "Joao Pires Ramos",
                    "post" => "Chief Operating Officer",
                    "email" => "joao.pires@airlogistics.de",
                ],
                [
                    "name" => "Sander Bras",
                    "post" => "Head of Business Development Middle East & Asia Pacific",
                    "email" => "sander.bras@airlogisticsgroup.com",
                ],
                [
                    "name" => "Assaad Sfeir",
                    "post" => "Vice President Airline Sales",
                    "email" => "assaad.sfeir@airlogisticsgroup.com",
                ],
            ],
        ],
        [
            "title" => "Marketing",
            "number" => "1",
            "members" => [
                [
                    "name" => "Robyn Ballard",
                    "post" => "Marketing Manager",
                    "email" => "robyn.ballard@airlogisticsgroup.com",
                ],
            ],
        ],
        [
            "title" => "Global",
            "number" => "1",
            "members" => [
                [
                    "name" => "Global",
                    "post" => "",
                    "email" => "info@airlogisticsgroup.com",
                ],
            ],
        ],
    ];
@endphp

@section('content')
<div class="w-full flex flex-col bg-[#FFFFFF] global-network-page relative">
  <div class="relative overflow-hidden z-0">
    <div class="absolute Page-background -z-10 w-full h-full"></div>
    <div class="Common-padding flex flex-col items-center">
      <div class="w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px]">
        <div class="flex flex-col gap-3 md:gap-4 xl:gap-5">
          <p class="font-transducer font-medium Medium-text text-[#36A5C2] uppercase">
            Global Network
          </p>
          <h3 class="max-w-[460px] md:max-w-[550px] xl:max-w-[710px] font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading">
            Where Airline Strategy Becomes Market Reality.
          </h3>
          <p class="max-w-[590px] xl:max-w-[670px] font-normal Normal-text text-[#667980]">
            100 Offices. 60+ Countries. Global coverage across all major cargo markets — delivered through local expertise and disciplined execution.
          </p>
        </div>
        <div class="w-full border-[1px] border-[#F0F5F7] divide-y md:divide-y-0 divide-x divide-[#F0F5F7] grid grid-cols-2 md:grid-cols-4 bg-[#FFFFFF] rounded-[16px]">
          <div class="w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1 stat-counter" data-count="100">
            <div class="font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center">
              <span>0</span>
            </div>
            <div class="font-normal Normal-text text-[#36A5C2]">Offices</div>
          </div>
          <div class="w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1 stat-counter" data-count="60">
            <div class="font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center">
              <span>0</span><small>+</small>
            </div>
            <div class="font-normal Normal-text text-[#36A5C2]">Countries</div>
          </div>
          <div class="w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1 stat-counter" data-count="6">
            <div class="font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center">
              <span>0</span>
            </div>
            <div class="font-normal Normal-text text-[#36A5C2]">Regions</div>
          </div>
          <div class="w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1 stat-counter" data-count="135">
            <div class="font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center">
              <span>0</span><small>+</small>
            </div>
            <div class="font-normal Normal-text text-[#36A5C2]">Airline Partners</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-[70px] md:pt-[80px] xl:pt-[100px] flex flex-col gap-8 xl:gap-[10px]">
    <div class="Common-padding flex flex-col items-center">
      <div class="w-full max-w-[1700px]">
        <div class="w-full flex flex-col xl:flex-row gap-5 xl:items-center xl:justify-between">
          <div class="flex flex-wrap gap-2 top-filters">
            <button data-rg="All" class="filter-btn w-fit py-2 px-4 border-[2px] rounded-[8px] Medium-text cursor-pointer border-[#103440] font-semibold text-[#FFFFFF] bg-[#103440]">All</button>
            @foreach($regionOrder as $rg)
                <button data-rg="{{ $rg }}" class="filter-btn w-fit py-2 px-4 border-[2px] rounded-[8px] Medium-text cursor-pointer border-[#F0F5F7] hover:border-[#103440] font-normal text-[#667980] hover:text-[#FFFFFF] hover:bg-[#103440] Hover-effect">{{ $rg }}</button>
            @endforeach
          </div>
          <div class="flex gap-2 items-center">
            <div><img src="{{ asset('GlobalNetwork-line-icon.svg') }}" alt="Icon" width="8" height="8" class="w-[8px]" /></div>
            <p class="font-normal Medium-text text-[#9FACB1]">
              Tap any station to view office details
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-col items-center">
      <div class="w-full max-w-[1700px] bg-gradient-to-r from-[#F0F5F7] via-[#FFFFFF] to-[#F0F5F7]">
        
        <div class="map-stage w-full h-[500px] md:h-[650px] xl:h-[800px] relative overflow-hidden touch-none z-10 cursor-grab active:cursor-grabbing">
          <canvas id="mapCanvas" class="absolute inset-0 pointer-events-none w-full h-full"></canvas>
          <div id="pins" class="absolute inset-0 pointer-events-none w-full h-full"></div>
          
          <div id="tip" class="absolute bg-[#FFFFFF] shadow-lg border-[1px] border-[#F0F5F7] px-4 py-3 rounded-[12px] flex flex-col gap-1 pointer-events-none z-[100] transition-opacity duration-200 opacity-0 min-w-max translate-x-[-50%] translate-y-[15px]"></div>
          
          <div class="font-normal Little-text text-[#667980] zoom-note absolute bottom-5 left-5 pointer-events-none bg-white/80 px-3 py-1 rounded-[100px] backdrop-blur-sm">
            Drag to pan · Pinch or +/- to zoom
          </div>
          
          <div id="scrollHint" class="scroll-hint absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#103440]/80 backdrop-blur-sm text-white px-6 py-3 rounded-[100px] font-medium text-[15px] z-30 pointer-events-none transition-all duration-300 opacity-0 scale-95 flex items-center gap-2">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Use Ctrl + scroll to zoom
          </div>
          
          <!-- <div class="map-ctrl absolute bottom-5 right-5 z-20 flex flex-col gap-2">
            <button id="zoomIn" onclick="window.mapZoomIn()" class="w-10 h-10 bg-[#FFFFFF] rounded-full shadow-sm border-[1px] border-[#F0F5F7] flex items-center justify-center text-[#103440] hover:text-[#36A5C2] transition-colors" aria-label="Zoom in">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <button id="zoomOut" onclick="window.mapZoomOut()" class="w-10 h-10 bg-[#FFFFFF] rounded-full shadow-sm border-[1px] border-[#F0F5F7] flex items-center justify-center text-[#103440] hover:text-[#36A5C2] transition-colors" aria-label="Zoom out">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <button id="zoomReset" onclick="window.mapReset()" class="w-10 h-10 bg-[#FFFFFF] rounded-full shadow-sm border-[1px] border-[#F0F5F7] flex items-center justify-center text-[#103440] hover:text-[#36A5C2] transition-colors mt-2" aria-label="Reset view">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 12a9 9 0 1 0 9-9 9 9 0 0 0-6.7 3" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M3 4v4h4" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div> -->
        </div>

      </div>
    </div>
  </div>

  <div class="Common-padding flex flex-col items-center">
    <div class="w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px]">
      
      <!-- Head Office component -->
      <div class="flex flex-col gap-8 xl:gap-10">
        <h5 class="font-transducer font-medium Small-heading text-[#36A5C2] tracking-[-1px] uppercase">
            Head Office
        </h5>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
          @foreach($headOfficers as $item)
            @php
              $safeTitle = str_replace(' ', '-', strtolower($item['title']));
            @endphp
            <div class="border-b-[2px] border-[#F0F5F7] accordion-item" data-title="{{ $safeTitle }}">
              <button type="button" class="accordion-toggle w-full pb-4 flex gap-5 items-center justify-between text-[#103440] hover:text-[#36A5C2] Hover-effect cursor-pointer" onclick="toggleHeadOffice('{{ $safeTitle }}')">
                  <span class="font-transducer font-normal Medium-text tracking-[-1px] uppercase text-left">
                      {{ $item['title'] }}
                  </span>
                  <div class='flex gap-2.5 items-center'>
                      <span class="font-normal Small-text text-[#9FACB1]">{{ $item['number'] }}</span>
                      <span class="arrow-icon flex-shrink-0 Small-text text-[#9FACB1] transition-transform duration-200 ease-in-out rotate-0">
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"></path></svg>
                      </span>
                  </div>
              </button>
              <div class="accordion-content overflow-hidden transition-all duration-300 max-h-0" style="transition: max-height 0.3s ease-out;">
                  <div class="flex flex-col gap-2 pb-3">
                      @foreach($item['members'] as $member)
                          <div class='min-h-[88px] w-full py-3 px-3 md:px-4 flex flex-col gap-2 items-start justify-center Small-text text-left bg-[#F0F5F7] rounded-[8px]'>
                              <p class='flex flex-col items-start'>
                                  <span class='font-transducer font-medium text-[#103440] tracking-[-0.2px] uppercase'>{{ $member['name'] }}</span>
                                  @if($member['post'])
                                      <span class='max-w-[220px] font-normal text-[#36A5C2]'>{{ $member['post'] }}</span>
                                  @endif
                              </p>
                              <a href="mailto:{{ $member['email'] }}" class='w-fit flex gap-1 items-center text-[#667980] hover:text-[#36A5C2] Hover-effect cursor-pointer'>
                                  <span>{{ $member['email'] }}</span>
                                  <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                              </a>
                          </div>
                      @endforeach
                  </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="flex flex-col gap-3 md:gap-4 xl:gap-5">
        <h3 class="font-transducer font-normal Main-heading text-[#103440] tracking-[-2.5px] uppercase">
          Every market we operate in
        </h3>
        <p class="max-w-[380px] sm:max-w-full sm:flex sm:flex-col font-normal Normal-text text-[#667980]">
          <span>Search any country, city or airport code.</span>
          <span>Expand a country, then open a station for its team and contact details.</span>
        </p>
      </div>

      <div class="flex flex-col">
        <div class="flex flex-col gap-4">
          <div class="w-full md:w-[645px] xl:w-[672px] p-4 flex gap-3 items-center bg-[#F0F5F7] rounded-[8px]">
            <div class="Small-text text-[#667980]">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </div>
            <div class="w-full relative">
              <input
                id="search"
                type="text"
                placeholder="Search for countries, cities or airport codes"
                class="w-full pr-[35px] bg-transparent font-normal Small-text text-[#103440] placeholder:text-[#9FACB1] focus:outline-none"
                autocomplete="off"
              />
              <button id="clearBtn" class="clear absolute right-0 top-1/2 -translate-y-1/2 p-1 text-[#103440] hover:text-[#FFFFFF] bg-[#FFFFFF] hover:bg-[#103440] rounded-full Hover-effect cursor-pointer hidden" type="button" aria-label="Clear">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 6L6 18M6 6l12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </button>
            </div>
          </div>
          <div class="flex flex-wrap gap-2 bottom-filters">
            <button data-rg="All" class="filter-btn w-fit py-2 px-4 border-[2px] rounded-[8px] Medium-text cursor-pointer border-[#103440] font-semibold text-[#FFFFFF] bg-[#103440]">All</button>
            @foreach($regionOrder as $rg)
                <button data-rg="{{ $rg }}" class="filter-btn w-fit py-2 px-4 border-[2px] rounded-[8px] Medium-text cursor-pointer border-[#F0F5F7] hover:border-[#103440] font-normal text-[#667980] hover:text-[#FFFFFF] hover:bg-[#103440] Hover-effect">{{ $rg }}</button>
            @endforeach
          </div>
        </div>

        <div>
          <div id="regions">
            @foreach($regionOrder as $rg)
              @if(isset($data['regions'][$rg]))
                @php $rdata = $data['regions'][$rg]; @endphp
                <div class="mt-[40px] md:mt-[50px] xl:mt-[60px] flex flex-col gap-8 xl:gap-10 region-section" data-region="{{ $rg }}">
                  <div class="w-full border-t-[2px] border-[#F0F5F7]"></div>
                  <div class="flex flex-col gap-1">
                    <h3 class="font-transducer font-medium Small-heading text-[#36A5C2] tracking-[-1px] uppercase">{{ $rg }}</h3>
                    <div class="font-normal Medium-text text-[#667980]">
                      {{ $rdata['country_count'] }} countries · {{ $rdata['office_count'] }} stations
                    </div>
                  </div>
                  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-7">
                    @foreach($rdata['countries'] as $c)
                      @php
                        $citiesBlob = implode(' ', array_map(function($x) { return strtolower($x['city']) . ' ' . strtolower($x['code']); }, $c['cities']));
                      @endphp
                      <div class="border-b-[2px] border-[#F0F5F7] country-box" data-name="{{ strtolower($c['country']) }}" data-cities="{{ $citiesBlob }}">
                        <button type="button" class="country-btn w-full pb-4 flex gap-5 items-center justify-between text-[#103440] hover:text-[#36A5C2] Hover-effect cursor-pointer">
                          <span class="country-title font-transducer font-normal Medium-text tracking-[-1px] uppercase" data-original="{{ $c['country'] }}">{{ $c['country'] }}</span>
                          <div class="flex gap-2.5 items-center">
                            <span class="font-normal Small-text text-[#9FACB1]">{{ $c['count'] }}</span>
                            <span class="flex-shrink-0 Small-text text-[#9FACB1] transition-transform duration-200 ease-in-out rotate-0 arrow-icon">
                              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                            </span>
                          </div>
                        </button>
                        <div class="country-content max-h-[0px] overflow-hidden transform transition-all duration-300">
                          <div class="pb-3 flex flex-wrap gap-2">
                            @foreach($c['cities'] as $x)
                              <div class="p-1 flex items-center font-normal hover:font-semibold Little-text text-[#667980] hover:text-[#103440] bg-[#F0F5F7] Hover-effect rounded-[8px] cursor-pointer office-btn" data-code="{{ strtolower($x['code']) }}" role="button" tabindex="0">
                                <span class="py-1 px-2 city-title" data-original="{{ $x['city'] }}">{{ $x['city'] }}</span>
                                <span class="py-1 px-2 bg-[#FFFFFF] rounded-[4px]">{{ $x['code'] }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              @endif
            @endforeach
          </div>
          <div class="font-normal Medium-text text-[#667980] text-center hidden pt-8" id="noResults">
            No matches. Try a country, city or 3-letter airport code.
          </div>
        </div>
      </div>

      <div class="pt-[50px] md:pt-[60px] xl:pt-[80px] flex flex-col gap-4 md:gap-5 xl:gap-6 items-center">
        <h5 class="font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center">
          One system. Delivered locally.
        </h5>
        <div class="flex flex-wrap gap-8 xl:gap-10 items-center">
          @foreach($pillars as $label)
            <div class="flex gap-2 items-center">
              <div class="shrink-0">
                <img src="{{ asset('Arrow-icon.svg') }}" alt="Icon" width="16" height="16" class="w-[16px]" />
              </div>
              <p class="font-normal Medium-text text-[#667980] capitalize">
                {{ $label }}
              </p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Right Side Panel Overlay -->
<div id="panelOverlay" class="fixed inset-0 bg-[rgba(13,40,49,0.34)] backdrop-blur-[2px] opacity-0 invisible transition-all duration-300 pointer-events-none"></div>

<!-- Right Side Panel -->
<div id="detailPanel" class="fixed h-screen w-full md:max-w-[420px] xl:max-w-[440px] top-0 right-0 py-4 px-2.5 md:px-4 panel opacity-0 invisible transition-all duration-300 translate-x-full">
  <div class="w-full h-full p-3 md:p-5 xl:p-7 flex flex-col gap-1 bg-[#FFFFFF] rounded-[16px]">
    <div class="w-full h-fit flex flex-col gap-2">
      <div class="w-full flex gap-5 items-end justify-between">
        <div id="panel-code" class="w-fit py-1 px-2 font-semibold Small-text text-[#FFFFFF] uppercase bg-[#36A5C2] rounded-[8px]">
          LHR
        </div>
        <button class="w-fit p-2 text-[#667980] hover:text-[#FFFFFF] bg-[#F0F5F7] hover:bg-[#103440] Hover-effect rounded-full cursor-pointer panel-close" type="button" aria-label="Close">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
      </div>
      <div class="flex flex-col">
        <div class="flex gap-3 items-center">
          <p id="panel-city" class="font-transducer font-normal Large-text text-[#103440] tracking-[-1px] uppercase">London</p>
        </div>
        <p id="panel-location" class="font-normal Small-text text-[#667980] capitalize">
          United Kingdom · Europe
        </p>
      </div>
    </div>
    <div class="w-full mt-4 border-t-[1px] border-[#1034401A]"></div>
    <div class="w-full h-full overflow-hidden overflow-y-scroll custom-scrollbar pr-2 mt-4 flex flex-col gap-4">
      <div class="flex flex-col gap-4 items-center mt-4">
        <div class="w-full p-3 md:p-5 border-[2px] border-[#F0F5F7] rounded-[16px]">
          <p class="font-normal Medium-text text-[#103440]">
            Full team and contact details for this station are available on request. Reach our central team and we'll connect you with the right local office.
          </p>
        </div>
        <button class="w-fit py-3 px-6 font-normal tracking-[0.2px] Small-text bg-[#103440] text-white rounded-[100px] hover:bg-[#36A5C2] transition-colors panel-close">
          Get in touch
        </button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('styles')
<style>
/* Custom Map Styles */
.custom-scrollbar::-webkit-scrollbar {
  width: 6px;
}
.custom-scrollbar::-webkit-scrollbar-track {
  background: transparent;
}
.custom-scrollbar::-webkit-scrollbar-thumb {
  background: #E5ECEF;
  border-radius: 10px;
}
.custom-scrollbar::-webkit-scrollbar-thumb:hover {
  background: #D1DEE3;
}

.pin {
  position: absolute;
  width: 14px;
  height: 14px;
  border-radius: 50%;
  transform-origin: center center;
  transition: opacity 0.5s ease-out;
  opacity: 0;
  pointer-events: auto;
  cursor: pointer;
  z-index: 10;
}

.pin .dot {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background: #36A5C2;
  transition: all 0.2s ease;
  z-index: 2;
}

.pin .ring {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: rgba(54, 165, 194, 0.2);
  transition: all 0.2s ease;
  z-index: 1;
}

.pin:hover .dot {
  width: 6px;
  height: 6px;
  background: #103440;
}
.pin:hover .ring {
  width: 14px;
  height: 14px;
  background: rgba(16, 52, 64, 0.2);
}

.pin.beacon::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100%;
  height: 100%;
  background: rgba(54, 165, 194, 0.4);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  animation: ping 3s cubic-bezier(0, 0, 0.2, 1) infinite;
  z-index: 0;
}

@keyframes ping {
  0% { transform: translate(-50%, -50%) scale(1); opacity: 1; }
  75%, 100% { transform: translate(-50%, -50%) scale(3); opacity: 0; }
}

.pin.dim {
  opacity: 0.15 !important;
}

.pin.hit .dot {
  background: #E55C2C;
}
.pin.hit .ring {
  background: rgba(229, 92, 44, 0.2);
}
.pin.hit.beacon::before {
  background: rgba(229, 92, 44, 0.4);
}

.pin.sel .dot {
  background: #103440;
  width: 6px;
  height: 6px;
}
.pin.sel .ring {
  background: rgba(16, 52, 64, 0.2);
  width: 14px;
  height: 14px;
}

#tip::after {
  content: '';
  position: absolute;
  top: -6px;
  left: 50%;
  transform: translateX(-50%);
  border-width: 0 6px 6px 6px;
  border-style: solid;
  border-color: transparent transparent #FFFFFF transparent;
}
#tip.below {
  transform: translate(-50%, calc(-100% - 15px));
}
#tip.below::after {
  top: auto;
  bottom: -6px;
  border-width: 6px 6px 0 6px;
  border-color: #FFFFFF transparent transparent transparent;
}

#detailPanel.open {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  z-index: 100000;
}

#panelOverlay.show {
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
  z-index: 99999;
}
</style>
@endpush

@push('scripts')
<script>
    window.NETWORK_DATA = {!! json_encode($data) !!};
    window.REGION_ORDER = {!! json_encode($regionOrder) !!};

    function toggleHeadOffice(titleSlug) {
        const item = document.querySelector(`.accordion-item[data-title="${titleSlug}"]`);
        if (!item) return;

        const content = item.querySelector('.accordion-content');
        const arrow = item.querySelector('.arrow-icon');
        const isOpen = content.style.maxHeight && content.style.maxHeight !== '0px';

        document.querySelectorAll('.accordion-item').forEach(otherItem => {
            if (otherItem !== item) {
                const otherContent = otherItem.querySelector('.accordion-content');
                const otherArrow = otherItem.querySelector('.arrow-icon');
                otherContent.style.maxHeight = '0px';
                otherArrow.classList.remove('rotate-90');
                otherArrow.classList.add('rotate-0');
            }
        });

        if (isOpen) {
            content.style.maxHeight = '0px';
            arrow.classList.remove('rotate-90');
            arrow.classList.add('rotate-0');
        } else {
            content.style.maxHeight = content.scrollHeight + 'px';
            arrow.classList.remove('rotate-0');
            arrow.classList.add('rotate-90');
        }
    }
</script>
<script>
    {!! file_get_contents(resource_path('js/global-network.js')) !!}
</script>
@endpush
