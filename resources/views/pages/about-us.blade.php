@extends('layouts.app')
@section('title', 'About Us - Air Logistics Group')
@section('content')
@php
$dataOne = [
  ['target' => 60, 'suffix' => '+', 'icon' => '/AboutUs-count-icon-one.svg', 'label' => 'Countries'],
  ['target' => 100, 'suffix' => '', 'icon' => '/AboutUs-count-icon-two.svg', 'label' => 'Offices'],
  ['target' => 135, 'suffix' => '+', 'icon' => '/AboutUs-count-icon-three.svg', 'label' => 'Airline Partners'],
  ['target' => 500, 'suffix' => '+', 'icon' => '/AboutUs-count-icon-four.svg', 'label' => 'Professionals'],
];
$dataTwo = [
  ['suffixOne' => '$', 'target' => 700, 'suffixTwo' => 'M+', 'icon' => '/AboutUs-count-icon-five.svg', 'label' => 'Annual Cargo Sales'],
  ['suffixOne' => '', 'target' => 550000, 'suffixTwo' => '+', 'icon' => '/AboutUs-count-icon-six.svg', 'label' => 'AWBs Annually'],
  ['suffixOne' => '', 'target' => 10000, 'suffixTwo' => '+', 'icon' => '/AboutUs-count-icon-seven.svg', 'label' => 'Freight Forwarders'],
];
@endphp
<div class='w-full flex flex-col bg-[#FFFFFF]'>
  <div class='relative overflow-hidden z-0'>
    <div class='absolute Page-background -z-10 w-full h-full'></div>
    <div class='Common-padding flex flex-col items-center'>
      <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-3 md:gap-4 xl:gap-5'>
        <p class='font-transducer font-medium Medium-text text-[#36A5C2] uppercase'>
          People. Network. Integrity. Non-Negotiable.
        </p>
        <h3 class='max-w-[470px] md:max-w-[560px] xl:max-w-[710px] font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading'>
          Results Begin in Weeks. Scale Lasts for Decades.
        </h3>
      </div>
    </div>
  </div>
  <div class='Common-padding flex flex-col items-center'>
    <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px] flex flex-col gap-[80px] md:gap-[100px] xl:gap-[120px]'>
      
      <!-- CompanyStory -->
      <div>
        <div class='w-full grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-[50px] xl:gap-[60px]'>
          <div class='flex flex-col gap-8 xl:gap-10'>
            <p class='font-transducer font-medium Large-text text-[#36A5C2] tracking-[-1px] uppercase'>
              COMPANY STORY
            </p>
            <p class='max-w-[600px] flex flex-col gap-3 xl:gap-4 font-normal Medium-text text-[#667980]'>
              <span>Established in 1994, Air Logistics Group was built on a simple premise: air cargo should be managed as a commercial driver, not an operational overhead.</span>
              <span>Today, ALG operates across 60+ countries, with 100 offices, 135+ airline partners and a global team of over 500 professionals.</span>
              <span>ALG manages over $700 million in cargo sales annually, handling more than 550,000 air waybills and supports over 10,000 freight forwarders across its network.</span>
              <span>Airlines demand results, they need partners who are fast to market, understand local trends and add value in representation</span>
              <span>Through continued investment in systems, data and digital capability, ALG combines global coordination with entrepreneurial local leadership.</span>
              <span class='sm:flex sm:flex-col font-semibold'><span>ALG is built on three foundations: People. Network. Integrity.</span> <span>Experienced teams. Global alignment. Absolute accountability.</span></span>
              <span class='font-semibold text-[#103440]'>Results aren't claimed. They're delivered.</span>
            </p>
          </div>
          <div class='min-h-[250px] max-h-full flex justify-center lg:justify-end rounded-[16px] overflow-hidden'>
            <img src="{{ asset('/AboutUs-company-story-image.jpg') }}" alt="Image" class="w-[550px] rounded-[16px]" />
          </div>
        </div>
      </div>
      
      <!-- CountSection -->
      <div>
        <div class='w-full flex flex-col gap-2'>
          <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2">
            @foreach($dataOne as $item)
            <div class="stat-counter w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1.5 bg-[#F0F5F7] rounded-[8px]" data-target="{{ $item['target'] }}">
              <div class='flex gap-5 items-start justify-between'>
                <p class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center'>
                  <span class="count-val">0</span>@if($item['suffix'])<span>{{ $item['suffix'] }}</span>@endif
                </p>
                <div>
                  <img src="{{ asset($item['icon']) }}" alt="Icon" class='w-[30px] md:w-[35px] xl:w-[40px]' />
                </div>
              </div>
              <p class='font-normal Normal-text text-[#36A5C2]'>
                {{ $item['label'] }}
              </p>
            </div>
            @endforeach
          </div>
          <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">
            @foreach($dataTwo as $item)
            <div class="stat-counter w-full p-3 md:p-5 xl:p-6 flex flex-col gap-1.5 bg-[#F0F5F7] rounded-[8px]" data-target="{{ $item['target'] }}">
              <div class='flex gap-5 items-start justify-between'>
                <p class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-1px] uppercase flex items-center'>
                  @if($item['suffixOne'])<span>{{ $item['suffixOne'] }}</span>@endif<span class="count-val">0</span>@if($item['suffixTwo'])<span>{{ $item['suffixTwo'] }}</span>@endif
                </p>
                <div>
                  <img src="{{ asset($item['icon']) }}" alt="Icon" class='w-[30px] md:w-[35px] xl:w-[40px]' />
                </div>
              </div>
              <p class='font-normal Normal-text text-[#36A5C2]'>
                {{ $item['label'] }}
              </p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      
      <!-- FoundationSection -->
      <div class="w-full">
        <section id="foundation-section" class="w-full flex flex-col gap-[50px] md:gap-[60px] xl:gap-[80px] items-center">
          <p class="font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center">Three foundations</p>
          <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-8 xl:gap-10">
            <div class="h-full flex flex-col justify-between">
              <div class="flex flex-col h-full divide-y-[1px] divide-[#1034401A]">
                <!-- Item 1 -->
                <div class="foundation-item" data-index="0">
                  <div class="foundation-title cursor-pointer w-full py-2 xl:py-2.5 font-transducer font-normal Sub-heading tracking-[-2.5px] uppercase transition-colors duration-500 text-[#36A5C2]">People.</div>
                  <div class="foundation-content overflow-hidden transition-all duration-700 ease-out max-h-[300px] opacity-100">
                    <div class="pt-4 pb-20">
                      <p class="max-w-[400px] md:max-w-[430px] xl:max-w-[460px] font-normal Medium-text text-[#667980]">Experienced, accountable and embedded in their markets. Turning complexity into results.</p>
                      <div class="h-[0px] md:h-[60px] lg:h-[110px] xl:h-[180px]"></div>
                    </div>
                  </div>
                </div>
                <!-- Item 2 -->
                <div class="foundation-item" data-index="1">
                  <div class="foundation-title cursor-pointer w-full py-2 xl:py-2.5 font-transducer font-normal Sub-heading tracking-[-2.5px] uppercase transition-colors duration-500 text-[#103440]">Network.</div>
                  <div class="foundation-content overflow-hidden transition-all duration-700 ease-out max-h-0 opacity-0">
                    <div class="pt-4 pb-20">
                      <p class="max-w-[400px] md:max-w-[430px] xl:max-w-[460px] font-normal Medium-text text-[#667980]">Global in scale, consistent in execution. Delivering access, control and confidence.</p>
                      <div class="h-[0px] md:h-[60px] lg:h-[110px] xl:h-[180px]"></div>
                    </div>
                  </div>
                </div>
                <!-- Item 3 -->
                <div class="foundation-item" data-index="2">
                  <div class="foundation-title cursor-pointer w-full py-2 xl:py-2.5 font-transducer font-normal Sub-heading tracking-[-2.5px] uppercase transition-colors duration-500 text-[#103440]">Integrity.</div>
                  <div class="foundation-content overflow-hidden transition-all duration-700 ease-out max-h-0 opacity-0">
                    <div class="pt-4 pb-20">
                      <p class="max-w-[400px] md:max-w-[430px] xl:max-w-[460px] font-normal Medium-text text-[#667980]">Non-negotiable. Transparent, accountable and disciplined.</p>
                      <div class="h-[0px] md:h-[60px] lg:h-[110px] xl:h-[180px]"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="w-full h-[250px] md:h-[350px] lg:h-[400px] xl:h-[500px] rounded-[16px] overflow-hidden">
              <div class="relative w-full h-full rounded-[16px]">
                <img alt="People." class="foundation-img object-cover rounded-[16px] transition-all duration-500 ease-out absolute inset-0 opacity-100 scale-100" src="{{ asset('AboutUs-foundation-image-one.jpg') }}" style="width:100%;height:100%;" />
                <img alt="Network." class="foundation-img object-cover rounded-[16px] transition-all duration-500 ease-out absolute inset-0 opacity-0 scale-105 pointer-events-none" src="{{ asset('AboutUs-foundation-image-two.jpg') }}" style="width:100%;height:100%;" />
                <img alt="Integrity." class="foundation-img object-cover rounded-[16px] transition-all duration-500 ease-out absolute inset-0 opacity-0 scale-105 pointer-events-none" src="{{ asset('AboutUs-foundation-image-three.jpg') }}" style="width:100%;height:100%;" />
              </div>
            </div>
          </div>
        </section>
      </div>

      <div class='w-full relative overflow-hidden z-0 rounded-[16px]'>
        <div class='absolute Services-card-background -z-10 w-full h-full'></div>
        <div class='py-[50px] md:py-[60px] xl:py-[70px] px-3 md:px-5 flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
          <div class='shrink-0'>
            <img src="{{ asset('/AboutUs-quote-icon.svg') }}" alt="Icon" class='w-[56px]' />
          </div>
          <h5 class='xl:max-w-[530px] font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center'>
            We are not here to simply move cargo. We are here to deliver results.
          </h5>
          <div class='flex flex-col gap-1 items-center Small-text'>
            <p class='font-transducer font-medium text-[#103440] tracking-[-0.2px] uppercase text-center'>
              Stephen Dawkins
            </p>
            <p class='font-normal text-[#36A5C2] text-center'>
              Chief Executive Officer
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // --- Number Counters ---
        const counters = document.querySelectorAll('.stat-counter');
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = parseInt(counter.getAttribute('data-target'), 10);
                    const span = counter.querySelector('.count-val');
                    let cur = 0;
                    const step = Math.max(1, Math.round(target / 45));
                    const timer = setInterval(() => {
                        cur += step;
                        if (cur >= target) {
                            cur = target;
                            clearInterval(timer);
                        }
                        span.textContent = cur.toLocaleString();
                    }, 22);
                    obs.unobserve(counter);
                }
            });
        }, { threshold: 0.2 });
        counters.forEach(c => observer.observe(c));

        // --- GSAP Foundation Animation ---
        gsap.registerPlugin(ScrollTrigger);
        
        const section = document.getElementById('foundation-section');
        const items = document.querySelectorAll('.foundation-item');
        const images = document.querySelectorAll('.foundation-img');
        
        let activeIndex = 0;
        let isAnimating = false;
        
        function setActive(index) {
            if (index === activeIndex) return;
            
            // Reset old
            const oldItem = items[activeIndex];
            oldItem.querySelector('.foundation-title').classList.replace('text-[#36A5C2]', 'text-[#103440]');
            const oldContent = oldItem.querySelector('.foundation-content');
            oldContent.classList.replace('max-h-[300px]', 'max-h-0');
            oldContent.classList.replace('opacity-100', 'opacity-0');
            
            images[activeIndex].classList.replace('opacity-100', 'opacity-0');
            images[activeIndex].classList.replace('scale-100', 'scale-105');
            images[activeIndex].classList.add('pointer-events-none');
            
            // Set new
            activeIndex = index;
            const newItem = items[activeIndex];
            newItem.querySelector('.foundation-title').classList.replace('text-[#103440]', 'text-[#36A5C2]');
            const newContent = newItem.querySelector('.foundation-content');
            newContent.classList.replace('max-h-0', 'max-h-[300px]');
            newContent.classList.replace('opacity-0', 'opacity-100');
            
            images[activeIndex].classList.replace('opacity-0', 'opacity-100');
            images[activeIndex].classList.replace('scale-105', 'scale-100');
            images[activeIndex].classList.remove('pointer-events-none');
        }
        
        // Setup GSAP Pin
        const trigger = ScrollTrigger.create({
            trigger: section,
            start: 'top top',
            end: '+=120%',
            pin: true,
            scrub: false,
            anticipatePin: 1
        });
        
        const handleWheel = (e) => {
            if (!trigger.isActive) return;
            
            if (isAnimating) {
                e.preventDefault();
                return;
            }
            
            // SCROLL DOWN
            if (e.deltaY > 0) {
                if (activeIndex < 2) {
                    e.preventDefault();
                    isAnimating = true;
                    setActive(activeIndex + 1);
                    setTimeout(() => { isAnimating = false; }, 600);
                    return;
                }
            } 
            // SCROLL UP
            else if (e.deltaY < 0) {
                if (activeIndex > 0) {
                    e.preventDefault();
                    isAnimating = true;
                    setActive(activeIndex - 1);
                    setTimeout(() => { isAnimating = false; }, 600);
                    return;
                }
            }
        };
        
        window.addEventListener('wheel', handleWheel, { passive: false });
        
        // Support click as well (from original template)
        items.forEach((item, index) => {
            const title = item.querySelector('.foundation-title');
            title.addEventListener('click', () => {
                setActive(index);
            });
        });
    });
</script>
@endpush
@endsection
