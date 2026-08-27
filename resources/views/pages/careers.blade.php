@extends('layouts.app')
@section('content')
@php
$jobs = [
  ['title' => 'Cargo Sales Manager', 'city' => 'Dubai', 'country' => 'United Arab Emirates', 'type' => 'Full-time'],
  ['title' => 'Station Manager', 'city' => 'London', 'country' => 'United Kingdom', 'type' => 'Full-time'],
  ['title' => 'Operations Coordinator', 'city' => 'Singapore', 'country' => 'Singapore', 'type' => 'Full-time'],
  ['title' => 'Account Manager', 'city' => 'Frankfurt', 'country' => 'Germany', 'type' => 'Full-time'],
  ['title' => 'Customer Service Agent', 'city' => 'Mumbai', 'country' => 'India', 'type' => 'Full-time'],
  ['title' => 'Cargo Handling Supervisor', 'city' => 'Bangkok', 'country' => 'Thailand', 'type' => 'Full-time'],
  ['title' => 'Business Development Manager', 'city' => 'Paris', 'country' => 'France', 'type' => 'Full-time'],
  ['title' => 'Finance & Admin Officer', 'city' => 'Manila', 'country' => 'Philippines', 'type' => 'Full-time'],
];
$applyEmail = 'info@airlogisticsgroup.com';
@endphp
<div class='w-full flex flex-col bg-[#FFFFFF]'>
  <div class='relative overflow-hidden z-0'>
    <div class='absolute Page-background -z-10 w-full h-full'></div>
    <div class='Common-padding flex flex-col items-center'>
      <div class='w-full max-w-[1700px] pt-[120px] md:pt-[140px] xl:pt-[160px] pb-[70px] md:pb-[80px] xl:pb-[100px] flex flex-col gap-3 md:gap-4 xl:gap-5'>
        <p class='font-transducer font-medium Medium-text text-[#36A5C2]'>CAREERS</p>
        <h3 class='font-transducer font-normal Main-heading tracking-[-2.5px] uppercase Animate-heading'>
          Join our global team.
        </h3>
        <p class='max-w-[430px] md:max-w-[450px] xl:max-w-[480px] font-normal Normal-text text-[#667980]'>
          We hire experienced, accountable people who want to deliver results for a commercially focused business.
        </p>
      </div>
    </div>
  </div>
  <div class='Common-padding flex flex-col items-center'>
    <div class='w-full max-w-[1700px] py-[70px] md:py-[80px] xl:py-[100px]'>
      <div class='flex flex-col gap-8 xl:gap-10'>
        <div class='flex flex-col gap-[40px] md:gap-[50px] xl:gap-[60px]'>
          <h5 class='font-transducer font-normal Sub-heading text-[#103440] tracking-[-2.5px] uppercase'>
            Open Roles
          </h5>
          <div class="w-full border-[2px] border-[#F0F5F7] divide-y-[2px] divide-[#F0F5F7] rounded-[16px]">
            @foreach($jobs as $job)
              <div class="w-full p-3 md:p-5 xl:p-6 flex flex-col sm:flex-row gap-6 sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2">
                  <div class="flex flex-col gap-1">
                    <p class='font-transducer font-medium Large-text text-[#103440] tracking-[-1px] uppercase'>
                      {{ $job['title'] }}
                    </p>
                    <p class='font-normal Medium-text text-[#36A5C2]'>
                      <span>{{ $job['city'] }}</span> <span>&middot;</span> <span>{{ $job['country'] }}</span>
                    </p>
                  </div>
                  <div class="w-fit py-1 px-2 font-normal Small-text text-[#667980] bg-[#F0F5F7] rounded-[8px]">
                    {{ $job['type'] }}
                  </div>
                </div>
                <a href="mailto:{{ $applyEmail }}?subject=Application:%20{{ rawurlencode($job['title']) }}&body=Hello%20ALG%20Recruitment%20Team,%0A%0AI%20would%20like%20to%20apply%20for%20the%20following%20role:%0A%0APosition:%20{{ rawurlencode($job['title']) }}%0ALocation:%20{{ rawurlencode($job['city']) }},%20{{ rawurlencode($job['country']) }}%0AEmployment%20type:%20{{ rawurlencode($job['type']) }}%0APlease%20find%20my%20CV%20attached.%0A---%0AName:%0APhone:%0ALinkedIn%20(optional):%0ABrief%20introduction:" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] BD-button'>
                  Apply
                </a>
              </div>
            @endforeach
          </div>
        </div>
        <div class='w-full px-3 md:px-5 py-6 md:py-8 xl:py-10 flex flex-col gap-8 xl:gap-10 items-center bg-[#F0F5F7] rounded-[16px]'>
          <h5 class='flex flex-col font-transducer font-normal Small-heading text-[#103440] tracking-[-1px] uppercase text-center'>
            <span>Don't see the right role?</span>
            <span class='max-w-[440px] md:max-w-[500px] lg:max-w-[590px] xl:max-w-[650px]'>
              Send your CV anyway. we're always interested in strong air cargo talent.
            </span>
          </h5>
          <a href="mailto:{{ $applyEmail }}?subject=General%20application%20%E2%80%94%20Air%20Logistics%20Group&body=Hello%20ALG%20Recruitment%20Team,%0A%0AI%20would%20like%20to%20submit%20my%20CV%20for%20consideration%20at%20Air%20Logistics%20Group.%0A---%0AName:%0APhone:%0APreferred%20location%20(city,%20country):%0ALinkedIn%20(optional):%0ABrief%20introduction:" class='w-fit py-3 px-6 font-normal Medium-text tracking-[0.2px] CV-button'>
            Send your CV
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
