<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ALG - Air Logistics Group')</title>
    <meta name="description" content="Air Logistics Group">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="black">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
    <!-- Font face declarations -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}?v=2">
    <!-- Link the copied CSS files -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}?v=2">
    <link rel="stylesheet" href="{{ asset('css/background.css') }}?v=2">

    <!-- Tailwind CSS (Play CDN for arbitrary values support) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              opensauce: ['"Open Sauce Two"', 'sans-serif'],
              transducer: ['Transducer', 'sans-serif'],
            }
          }
        }
      }
    </script>
    @stack('styles')
</head>
<body class="min-h-screen text-[#103440] bg-[#FFFFFF] font-opensauce antialiased">
    <div class="relative flex flex-col min-h-screen">
        @include('partials.navbar')
        
        <main class="flex-grow">
            @yield('content')
        </main>
        
        @include('partials.footer')
        
        @include('partials.contact-modal')
    </div>
    @stack('scripts')
</body>
</html>
