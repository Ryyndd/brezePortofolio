<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Ferynnd')); ?></title>

        <!-- Animate -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <link rel="stylesheet" href="<?php echo e(asset('source/style.css')); ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Motion Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/motion/10.15.5/motion.min.js"></script>

        <!-- Dark mode script -->
        

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
            <?php echo $__env->make('components.nav-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <!-- Page Content -->
            <div class="cursor-dot" data-cursor-dot ></div>
            <div class="cursor-outline" data-cursor-outline ></div>
            <main class="overflow-hidden">
                <?php echo e($slot); ?>

            </main>

            
            <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
            <script src="<?php echo e(asset('source/script.js')); ?>" ></script>
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
<?php /**PATH D:\~Belajar\Backup\Belajar-BrezeREDESIGN\resources\views/layouts/app.blade.php ENDPATH**/ ?>