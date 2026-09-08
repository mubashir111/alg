<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ALG - Air Logistics Group')</title>
    <meta name="description" content="Air Logistics Group">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}?v=5">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}?v=5">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v=5">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}?v=5">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#103440">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#103440">
    <!-- Font face declarations -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}?v=3">
    <!-- Link the copied CSS files -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('css/design.css') }}?v=3">
    <link rel="stylesheet" href="{{ asset('css/background.css') }}?v=3">

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
