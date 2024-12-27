<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ferynnd') }}</title>

        <!-- Animate -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('source/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Motion Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/motion/10.15.5/motion.min.js"></script>

        <!-- Dark mode script -->
        {{-- <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script> --}}

        <script>
            
            function setTheme(theme) {
                localStorage.setItem('theme', theme);
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }

        </script>

    </head>
    <body class= "martian-mono dark:bg-slate-900 " >
            @include('components.nav-app')
            @include('sweetalert::alert')
            
            <!-- Page Content -->
            <div class="cursor-dot" data-cursor-dot ></div>
            <div class="cursor-outline" data-cursor-outline ></div>
            <main class="overflow-hidden">
                {{ $slot }}
            </main>

            {{-- Liblary Typed.js --}}
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script src="{{ asset('source/script.js') }}" ></script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            <script src="https://unpkg.com/framer-motion@latest/dist/framer-motion.js"></script>
            <script>
                const cursor = document.getElementById('custom-cursor');
                document.addEventListener('mousemove', (e) => {
                     const { clientX, clientY } = e;
                     cursor.style.left = `${clientX}px`;
                     cursor.style.top = `${clientY}px`;
                 });
         
                 const links = document.querySelectorAll('a, button');
                 links.forEach(link => {
                     link.addEventListener('mouseenter', () => {
                         cursor.classList.add('scale-150');
                     });
                     link.addEventListener('mouseleave', () => {
                         cursor.classList.remove('scale-150');
                     });
                 });
             </script>

    </body>
</html>
