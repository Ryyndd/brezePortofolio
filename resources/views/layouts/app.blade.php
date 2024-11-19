<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Animate -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('source/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    </head>
    <body class="bg-white martian-mono" >
            @include('components.nav-app')
            
            <!-- Page Content -->
            <div class="cursor-dot" data-cursor-dot ></div>
            <div class="cursor-outline" data-cursor-outline ></div>
            <main>
                {{ $slot }}
            </main>

            {{-- Liblary Typed.js --}}
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script src="{{ asset('source/script.js') }}" ></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            
    </body>
</html>
