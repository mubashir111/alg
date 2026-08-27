@extends('layouts.app')

@section('content')
<div class='w-full flex flex-col bg-[#FFFFFF]'>
    <!-- Header Section -->
    <div class='relative overflow-hidden z-0'>
        <div class='absolute Page-background -z-10 w-full h-full'></div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-3 md:gap-4 xl:gap-5'>
                <p class='font-transducer font-medium Medium-text text-[#36A5C2] uppercase'>
                    Maximise Cargo Contribution
                </p>
                <h3 class='max-w-[560px] md:max-w-[660px] xl:max-w-[820px] font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading'>
                    Re-engineered for Commercial Performance.
                </h3>
                <p class='max-w-[400px] md:max-w-full md:flex md:flex-col font-normal Normal-text text-[#667980]'>
                    <span>A fully integrated model combining sales, pricing, service</span>
                    <span>and execution to drive measurable revenue and yield across global markets.</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Our Services Section -->
    <div>
        <div class='Common-padding flex flex-col items-center bg-[#FFFFFF]'>
            <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px] items-center'>
                <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
                    <h5 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center'>
                        Our Services
                    </h5>
                    <p class='max-w-[460px] md:max-w-[600px] lg:max-w-[690px] xl:max-w-[730px] font-normal Normal-text text-[#667980] text-center'>
                        A fully integrated commercial agent model designed to drive revenue, improve yield and deliver high level of service across every market.
                    </p>
                </div>
                <div class='w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4'>
                    @php
                    $services = [
                        [
                            "heading" => "Sales",
                            "icon" => "Services-ourServices-icon-one.svg",
                            "data" => ["Local market expertise", "Direct customer access", "Data-led demand generation"],
                            "descriptionOne" => "Revenue-driven demand,",
                            "descriptionTwo" => "targeted for commercial return.",
                        ],
                        [
                            "heading" => "Marketing",
                            "icon" => "Services-ourServices-icon-two.svg",
                            "data" => ["Market-driven demand creation", "Targeted multi-channel campaigns", "Forwarder and trade engagement"],
                            "descriptionOne" => "Brand visibility that converts",
                            "descriptionTwo" => "— digital to on-ground.",
                        ],
                        [
                            "heading" => "Operations & Customer Services",
                            "icon" => "Services-ourServices-icon-three.svg",
                            "data" => ["Consistent global execution", "Specialist cargo capability", "Integrated booking systems"],
                            "descriptionOne" => "Flight by flight",
                            "descriptionTwo" => "Load factor optimisation.",
                        ],
                        [
                            "heading" => "Handling & Trucking",
                            "icon" => "Services-ourServices-icon-four.svg",
                            "data" => ["Coordinated supplier networks", "Cost-efficient transport solutions", "End-to-end import handling"],
                            "descriptionOne" => "End-to-end ground coordination,",
                            "descriptionTwo" => "quality controlled at every point.",
                        ],
                        [
                            "heading" => "Finance & Administration",
                            "icon" => "Services-ourServices-icon-five.svg",
                            "data" => ["Global revenue accounting", "Centralised invoicing control", "Data validation and accuracy"],
                            "descriptionOne" => "Structured commercial reporting",
                            "descriptionTwo" => "— clear, transparent, traceable.",
                        ],
                        [
                            "heading" => "Business Intelligence",
                            "icon" => "Services-ourServices-icon-six.svg",
                            "data" => ["Real-time performance insights", "Industry-leading data tools", "Continuous digital investment"],
                            "descriptionOne" => "Live visibility. Actionable insight.",
                            "descriptionTwo" => "Without unnecessary complexity.",
                        ],
                    ];
                    @endphp

                    @foreach($services as $item)
                    <div class='h-full w-full p-3 md:p-5 xl:p-6 border-[2px] border-[#F0F5F7] rounded-[16px] flex flex-col gap-4 xl:gap-5'>
                        <div class='flex gap-5 items-center justify-between'>
                            <p class='xl:max-w-[220px] font-transducer font-normal Large-text text-[#103440] tracking-[-1px] uppercase'>
                                {{ $item['heading'] }}
                            </p>
                            <div class='shrink-0'>
                                <img src="{{ asset($item['icon']) }}" alt="Icon" class='w-[52px]' />
                            </div>
                        </div>
                        <div class='border-t-[1px] border-[#F0F5F7]'></div>
                        <div class='flex flex-col gap-2'>
                            @foreach($item['data'] as $dataItem)
                            <div class='flex gap-2 items-center'>
                                <div class='shrink-0'>
                                    <img src="{{ asset('Arrow-icon.svg') }}" alt="Icon" class='w-[8px]' />
                                </div>
                                <p class='font-normal Medium-text text-[#667980]'>
                                    {{ $dataItem }}
                                </p>
                            </div>
                            @endforeach
                        </div>
                        <div class='border-t-[1px] border-[#F0F5F7]'></div>
                        <p class='flex flex-col font-transducer font-normal Medium-text text-[#36A5C2] tracking-[-1px] uppercase'>
                            <span>{{ $item['descriptionOne'] }}</span>
                            <span>{{ $item['descriptionTwo'] }}</span>
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Services Animation Section -->
    <div>
        <div class='relative overflow-hidden z-0'>
            <div class='absolute Services-os-background -z-10 w-full h-full'></div>
            <div class='Common-padding flex flex-col items-center'>
                    <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px] items-center'>
                        <h3 class='font-transducer font-normal Sub-heading text-[#FFFFFF] tracking-[-1.5px] uppercase text-center'>
                        A COMMERCIAL OPERATING SYSTEM
                        </h3>
                        
                        @php
                        $system = [
                            ["heading" => "Commercial Intelligence", "text" => "Data-led decision making across every market."],
                            ["heading" => "Entrepreneurial Local Leadership", "text" => "Local teams empowered to act at speed."],
                            ["heading" => "Revenue and Yield Discipline", "text" => "Structured pricing aligned to market conditions."],
                            ["heading" => "Global Coordination", "text" => "One system. Aligned execution worldwide."],
                        ];
                        @endphp

                        <!-- Mobile screen -->
                        <div class='w-full sm:hidden'>
                        <div class='w-full flex flex-col gap-7 items-center'>
                            <p class='flex flex-col font-transducer font-normal Noraml-text text-[#CEEBF2] tracking-[-0.5px] uppercase text-center'>
                            <span>ALG is built on</span>
                            <span>four integrated pillars:</span>
                            </p>
                            <div class="w-full flex flex-col gap-6">
                            @foreach($system as $item)
                                <div class='flex flex-col gap-1 text-[#FFFFFF]'>
                                <h3 class="font-transducer font-medium Small-heading tracking-[-0.5px] uppercase">{{ $item['heading'] }}</h3>
                                <p class="font-normal Normal-text">{{ $item['text'] }}</p>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        </div>

                        <!-- Tab screen -->
                        <div id="sa-container" class="w-full hidden sm:block relative">
                        <div class='w-full grid grid-cols-2 gap-5 md:gap-6 xl:gap-10'>
                            <div class='w-full'>
                                <div id="sa-left" class='w-full flex gap-5 md:gap-6 xl:gap-10 items-center visible'>
                                    <p class='flex flex-col font-transducer font-normal Normal-text text-[#CEEBF2] tracking-[-0.5px] uppercase whitespace-nowrap'>
                                    <span>ALG is built on</span>
                                    <span>four integrated pillars:</span>
                                    </p>
                                    <div class='w-full border-t-[2px] border-[#7F7F7E]'></div>
                                </div>
                                <div id="sa-fixed" style="display: none; position: fixed; top: 50%; transform: translateY(-50%); z-index: 60; pointer-events: none;">
                                    <div class='w-full flex gap-5 md:gap-6 xl:gap-10 items-center'>
                                    <p class='flex flex-col font-transducer font-normal Normal-text text-[#CEEBF2] tracking-[-0.5px] uppercase whitespace-nowrap'>
                                        <span>ALG is built on</span>
                                        <span>four integrated pillars:</span>
                                    </p>
                                    <div class='w-full border-t-[2px] border-[#7F7F7E]'></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-8 lg:gap-10 xl:gap-14">
                            @foreach($system as $idx => $item)
                                <div class='sa-item flex flex-col gap-1 items-start transition-all duration-400 ease-in-out {{ $idx === 0 ? "text-[#FFFFFF]" : "text-[#7F7F7E]" }}'>
                                <h3 class="font-transducer font-medium Small-heading tracking-[-0.5px] uppercase">{{ $item['heading'] }}</h3>
                                <p class="font-normal Normal-text">{{ $item['text'] }}</p>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

    <!-- Built Section -->
    <div>
        <div class='Common-padding flex flex-col items-center'>
            <div class='w-full max-w-[1700px] pt-[70px] md:pt-[80px] xl:pt-[100px] pb-[50px] md:pb-[60px] xl:pb-[80px] flex flex-col gap-[70px] md:gap-[80px] xl:gap-[100px] items-center'>
                <div class='w-full flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px] items-center'>
                    <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
                        <h3 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center'>
                            BUILT TO LAST. FAST TO START.
                        </h3>
                        <p class='max-w-[510px] lg:max-w-[620px] xl:max-w-[650px] font-normal Normal-text text-[#667980] text-center'>
                            Rapid, standardised deployment gets your commercial engine running fast, without compromising control.
                        </p>
                    </div>
                    <div class='w-full grid grid-cols-1 md:grid-cols-3 gap-10'>
                        @php
                        $builtFeatures = [
                            ["icon" => "Services-built-icon-one.svg", "textOne" => "30-Day", "textTwo" => "Onboarding"],
                            ["icon" => "Services-built-icon-two.svg", "textOne" => "Standardised", "textTwo" => "Deployment"],
                            ["icon" => "Services-built-icon-three.svg", "textOne" => "Immediate CommerciaL", "textTwo" => "Activation"],
                        ];
                        @endphp
                        @foreach($builtFeatures as $item)
                        <div class='flex flex-col gap-6 md:gap-8 xl:gap-10 items-center'>
                            <div class='shrink-0'>
                                <img src="{{ asset($item['icon']) }}" alt="Icon" class='w-[45px] xl:w-[52px]' />
                            </div>
                            <p class='flex flex-col font-transducer font-normal Large-text text-[#103440] tracking-[-1px] uppercase text-center'>
                                <span>{{ $item['textOne'] }}</span>
                                <span>{{ $item['textTwo'] }}</span>
                            </p>
                        </div>
                        @endforeach
                    </div>
                    <p class='max-w-[500px] md:max-w-[550px] lg:max-w-[700px] xl:max-w-[880px] font-transducer font-normal Small-heading text-[#36A5C2] tracking-[-1px] uppercase text-center'>
                        Underpinned by strong governance and consistent execution. Trust is earned through delivery.
                    </p>
                </div>
                <div class='w-full relative overflow-hidden z-0 rounded-[16px]'>
                    <div class='absolute Services-card-background -z-10 w-full h-full'></div>
                    <div class='py-[50px] md:py-[60px] xl:py-[70px] px-3 md:px-5 flex flex-col gap-8 xl:gap-10 items-center'>
                        <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
                            <p class='font-transducer font-medium medium-text text-[#36A5C2] uppercase text-center'>
                                Work with us
                            </p>
                            <p class='max-w-[360px] font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center'>
                                Let us build a customised solution for your airline.
                            </p>
                            <p class='font-normal Normal-text text-[#667980] text-center'>
                                Every airline is different. So is every ALG solution.
                            </p>
                        </div>
                        <button class="w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button">
                            Request a Proposal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const container = document.getElementById('sa-container');
  const left = document.getElementById('sa-left');
  const fixed = document.getElementById('sa-fixed');
  const items = document.querySelectorAll('.sa-item');

  let isFixed = false;
  let activeIndex = 0;
  let ticking = false;

  const setActiveIndex = (index) => {
      activeIndex = index;
      items.forEach((el, i) => {
          if (i === index) {
              el.classList.add('text-[#FFFFFF]');
              el.classList.remove('text-[#7F7F7E]');
          } else {
              el.classList.add('text-[#7F7F7E]');
              el.classList.remove('text-[#FFFFFF]');
          }
      });
  };

  const compute = () => {
      if (!left || !container) return;

      const leftRect = left.getBoundingClientRect();
      const containerRect = container.getBoundingClientRect();
      const vpCenter = window.innerHeight / 2;
      const leftCenter = leftRect.top + leftRect.height / 2;

      const containerBottomViewport = containerRect.bottom;
      const enoughRoomBelow = containerBottomViewport > vpCenter + leftRect.height / 2 + 8;

      const shouldFix = leftCenter <= vpCenter && enoughRoomBelow;

      if (shouldFix !== isFixed) {
        if (shouldFix) {
          fixed.style.left = Math.round(leftRect.left) + 'px';
          fixed.style.width = Math.round(leftRect.width) + 'px';
          fixed.style.display = 'block';
          left.classList.add('invisible');
          left.classList.remove('visible');
        } else {
          fixed.style.display = 'none';
          left.classList.remove('invisible');
          left.classList.add('visible');
        }
        isFixed = shouldFix;
      }

      if (!shouldFix) {
        if (activeIndex !== 0) setActiveIndex(0);
      } else {
        const triggerY = window.scrollY + vpCenter;
        let closest = 0;
        let best = Infinity;
        items.forEach((el, i) => {
          if (!el) return;
          const r = el.getBoundingClientRect();
          const elCenter = r.top + window.scrollY + r.height / 2;
          const d = Math.abs(elCenter - triggerY);
          if (d < best) {
            best = d;
            closest = i;
          }
        });
        if (closest !== activeIndex) setActiveIndex(closest);
      }
  };

  const onScroll = () => {
      if (!ticking) {
        ticking = true;
        window.requestAnimationFrame(() => {
          compute();
          ticking = false;
        });
      }
  };

  window.addEventListener('scroll', onScroll, { passive: true });
  window.addEventListener('resize', onScroll);
  setTimeout(compute, 50);
});
</script>
@endsection
