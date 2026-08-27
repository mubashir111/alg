@extends('layouts.app')
@section('content')
@php
$management = [
  ['image' => '/SeniorManagement-image-one.svg', 'position' => 'Chief Executive Officer', 'name' => 'Stephen Dawkins', 'description' => 'Stephen has over 42 years of cargo industry experience and founded Air Logistics in 1994. Since inception, he has led the growth of the ALG network, positioning the company as a global leader in cargo services.'],
  ['image' => '/SeniorManagement-image-two.svg', 'position' => 'Managing Director', 'name' => 'Helmut Mair', 'description' => 'Helmut brings 30 years’ air cargo experience, spanning American Airlines, Garuda Indonesia, Chapman Freeborn, and Air Logistics Group, where he has served as Managing Director since 2005.'],
  ['image' => '/SeniorManagement-image-three.svg', 'position' => 'Chief Operating Officer', 'name' => 'Joao Pires Ramos', 'description' => 'Joao joined ALG in 2008 as Managing Director Germany, bringing senior sales leadership from UPS Airlines and Capitol International, and now serves as ALG’s Chief Operating Officer focused on airline partnerships and commercial strategy.'],
  ['image' => '/SeniorManagement-image-four.svg', 'position' => 'Head of Business Development Middle East & Asia Pacific', 'name' => 'Sander Bras', 'description' => 'Sander joined ALG in 2017, bringing over 15 years of international freight forwarding and air logistics experience, with a strong track record in commercial growth, strategic partnerships, and managing complex supply chains across dynamic regional markets.'],
  ['image' => '/SeniorManagement-image-five.svg', 'position' => 'Vice President Airline Sales', 'name' => 'Assaad Sfeir', 'description' => 'Assaad joined Air Logistics Group in January 2026, bringing 35 years’ experience in cargo sales, airline partnerships and ground handling, most recently with WFS.'],
];
$team = [
  ['thumnail' => 'RB', 'position' => 'Marketing Manager', 'name' => 'Robyn Ballard'],
  ['thumnail' => 'SQ', 'position' => 'Bangladesh', 'name' => 'Shifa Qadeer'],
  ['thumnail' => 'JH', 'position' => 'Belgium', 'name' => 'Jeremy Henno'],
  ['thumnail' => 'AH', 'position' => 'Cambodia / Myanmar', 'name' => 'Alex Hao'],
  ['thumnail' => 'MN', 'position' => 'China / HK', 'name' => 'Martin Ngai'],
  ['thumnail' => 'JH', 'position' => 'Czech Republic', 'name' => 'Jindrich Hudecek'],
  ['thumnail' => 'HS', 'position' => 'Denmark / Finland', 'name' => 'Henrik Spove'],
  ['thumnail' => 'MC', 'position' => 'France / Portugal', 'name' => 'Myriam Da Costa'],
  ['thumnail' => 'IM', 'position' => 'Georgia', 'name' => 'Inga Melik-Gaikazyan'],
  ['thumnail' => 'JR', 'position' => 'Germany', 'name' => 'Joao Pires Ramos'],
  ['thumnail' => 'BK', 'position' => 'Hungary', 'name' => 'Bernadette Kapuvari'],
  ['thumnail' => 'SG', 'position' => 'India', 'name' => 'Sakshi Gupta'],
  ['thumnail' => 'RS', 'position' => 'Israel', 'name' => 'Roni Samocha'],
  ['thumnail' => 'MQ', 'position' => 'Italy', 'name' => 'Marianna Quarticelli'],
  ['thumnail' => 'GS', 'position' => 'Japan', 'name' => 'Gaku Shibuya'],
  ['thumnail' => 'CY', 'position' => 'Korea', 'name' => 'Charlie Yi'],
  ['thumnail' => 'IS', 'position' => 'Maldives', 'name' => 'Ismail Shareef'],
  ['thumnail' => 'SD', 'position' => 'Nepal', 'name' => 'Sundar Dahal'],
  ['thumnail' => 'MD', 'position' => 'Netherlands', 'name' => 'Martijn Van Duyvenvoorde'],
  ['thumnail' => 'IP', 'position' => 'Pakistan', 'name' => 'Imran Peracha'],
  ['thumnail' => 'EL', 'position' => 'Philippines', 'name' => 'Erich Lingad'],
  ['thumnail' => 'DD', 'position' => 'Poland', 'name' => 'Darek Dalewski'],
  ['thumnail' => 'RC', 'position' => 'Singapore', 'name' => 'Ronnie Chew'],
  ['thumnail' => 'PM', 'position' => 'Spain', 'name' => 'Pep Martinez'],
  ['thumnail' => 'NP', 'position' => 'Sri Lanka', 'name' => 'Nimali Perera'],
  ['thumnail' => 'WC', 'position' => 'Taiwan', 'name' => 'William Chen'],
  ['thumnail' => 'SB', 'position' => 'UAE', 'name' => 'Sander Bras'],
  ['thumnail' => 'CO', 'position' => 'UK', 'name' => 'Chris O\'Donnell'],
  ['thumnail' => 'AB', 'position' => 'Vietnam', 'name' => 'Alex Binh'],
];
@endphp
<div class='flex flex-col bg-[#FFFFFF]'>
  <div class='relative overflow-hidden z-0'>
    <div class='absolute Page-background -z-10 w-full h-full'></div>
    <div class='Common-padding flex flex-col items-center'>
      <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-3 md:gap-4 xl:gap-5'>
        <p class='font-transducer font-medium Medium-text text-[#36A5C2] uppercase'>
          LEADERSHIP & PEOPLE
        </p>
        <h3 class='max-w-[380px] md:max-w-[450px] xl:max-w-[560px] font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading'>
          The people behind the performance.
        </h3>
        <p class='font-normal Normal-text text-[#667980]'>
          Leadership with local authority. Coordination at global scale.
        </p>
      </div>
    </div>
  </div>
  <div class='Common-padding flex flex-col items-center'>
    <div class='w-full max-w-[1700px] pt-[70px] md:pt-[80px] xl:pt-[100px] pb-[50px] md:pb-[60px] xl:pb-[80px] flex flex-col gap-[70px] md:gap-[80px] xl:gap-[100px]'>
      <div>
        <!-- SeniorManagement -->
        <div class='flex flex-col gap-[40px] md:gap-[50px] xl:gap-[60px]'>
          <h3 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase'>
            Senior Management
          </h3>
          <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-6 md:gap-8 lg:gap-6 xl:gap-10'>
            @foreach($management as $item)
            @php
              $classes = "flex flex-col items-center lg:col-span-2";
              if ($loop->index == 3) {
                  $classes .= " lg:col-start-2";
              } elseif ($loop->index == 4) {
                  $classes .= " md:col-span-2 md:flex md:justify-center lg:col-start-auto lg:col-span-2";
              }
            @endphp
            <div class='{{ $classes }}'>
              <div class='h-full w-full max-w-[350px] lg:max-w-[320px] xl:max-w-[400px] border-[2px] border-[#F0F5F7] flex flex-col rounded-[16px]'>
                <div class='h-[355px] lg:h-[320px] xl:h-[440px] overflow-hidden rounded-t-[16px]'>
                  <img src="{{ asset($item['image']) }}" alt="Senior Management" class='w-[350px] lg:w-[320px] xl:w-[400px]' />
                </div>
                <div class='py-5 md:py-8 xl:py-10 px-3 md:px-5 xl:px-6 flex flex-col gap-4 md:gap-5 xl:gap-6 items-center'>
                  <div class='flex flex-col gap-1 items-center font-transducer tracking-[-1px] uppercase text-center'>
                    <p class='font-normal Medium-text text-[#36A5C2]'>{{ $item['position'] }}</p>
                    <p class='font-medium Large-text text-[#103440]'>{{ $item['name'] }}</p>
                  </div>
                  <p class='font-normal Medium-text text-[#667980] text-center'>{{ $item['description'] }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div>
        <!-- ManagementTeam -->
        <div class='pt-[30px] md:pt-[40px] xl:pt-[50px] flex flex-col gap-[40px] md:gap-[50px] xl:gap-[60px]'>
          <h3 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase'>
            Management Team
          </h3>
          <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 xl:gap-4'>
            @foreach($team as $item)
            <div class='h-full w-full border-[2px] border-[#F0F5F7] rounded-[16px]'>
              <div class='w-full p-3 md:p-4 flex gap-4 items-center'>
                <div class='h-[38px] md:h-[39px] xl:h-[40px] w-[38px] md:w-[39px] xl:w-[40px] flex items-center justify-center bg-[#CEEBF2] rounded-full shrink-0'>
                  <p class='font-transducer font-normal Small-text text-[#103440] tracking-[-0.2px] uppercase text-center'>
                    {{ $item['thumnail'] }}
                  </p>
                </div>
                <div class='flex flex-col gap-1 Small-text'>
                  <p class='font-normal text-[#36A5C2]'>{{ $item['position'] }}</p>
                  <p class='font-transducer font-medium text-[#103440] tracking-[-0.5px] uppercase'>{{ $item['name'] }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class='w-full relative overflow-hidden z-0 rounded-[16px]'>
        <div class='absolute Company-card-background -z-10 w-full h-full'></div>
        <div class='py-[50px] md:py-[60px] xl:py-[70px] px-3 md:px-5 flex flex-col gap-8 xl:gap-10 items-center'>
          <div class='flex flex-col gap-3 md:gap-4 xl:gap-5 items-center'>
            <p class='font-transducer font-medium Medium-text text-[#36A5C2]'>CAREERS</p>
            <h5 class='max-w-[330px] md:max-w-[460px] xl:max-w-[600px] font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase text-center'>
              We are always looking for air cargo talent.
            </h5>
            <p class='max-w-[490px] md:max-w-[520px] lg:max-w-full lg:flex lg:flex-col font-normal Normal-text text-[#667980] text-center'>
              <span>ALG operates across 60+ countries with locally empowered teams.</span>
              <span>If you are experienced, accountable and driven by results &mdash; we want to talk.</span>
            </p>
          </div>
          <a href="{{ url('/careers') }}" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
            View Open Roles
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
