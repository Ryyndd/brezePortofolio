<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('source/admin.css')); ?>" >
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-bold-straight/css/uicons-bold-straight.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
         <!-- css untuk select2 -->
         <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen dark:bg-gray-900">
            

        <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="#" class="flex ms-2 md:me-24">
                    
                    <span class=" montserat-logo self-center text-xl sm:text-2xl whitespace-nowrap dark:text-white tracking-tighter">ferynnd.</span>
                </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                    <div>
                        <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                        <p class="text-md text-gray-900 dark:text-white" role="none">
                            <?php echo e(Auth::user()->name); ?>

                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                            <?php echo e(Auth::user()->email); ?>

                        </p>
                        </div>
                        <ul class="py-1" role="none">
                        <li>
                            <a href="<?php echo e(route('profile.edit')); ?>" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem"><?php echo e(__('Profile')); ?></a>
                        </li>
                        <li>
                            <span class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                        <!-- Authentication -->
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <?php echo e(__('Log Out')); ?>

                                    </div>
                                </form>
                            </span>
                        </li>
                        
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </nav>
        
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
                <ul class="space-y-2 font-medium">
                <li>
                    <a href="<?php echo e(route('dashboard')); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fi fi-sr-layout-fluid text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('techstack.index')); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fi fi-brands-dev text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap text-lg">Techstack</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('project.index')); ?>" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fi fi-sr-folder-open text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ms-3 text-lg whitespace-nowrap">Project</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fi fi-sr-blog-pencil text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ms-3 text-lg whitespace-nowrap">Blog</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fi fi-sr-envelope text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap text-lg">Message</span>
                    </a>
                </li>
                

                <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fi fi-bs-sign-out-alt text-xl font-semibold flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"></i>
                            <span class="flex-1 ms-3 text-lg whitespace-nowrap">
                                <form method="POST" action="<?php echo e(route('logout')); ?>">
                                    <?php echo csrf_field(); ?>

                                    <div :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </div>
                                </form>
                            </span>
                        </a>
                </li>
                </ul>
            </div>
        </aside>
        
        <div class="sm:ml-64">
            <!-- Page Heading -->
            
    
            <!-- Page Content -->
            <main >
                <?php echo e($slot); ?>

            </main>
            
        </div>
  
        </div>
    </body>
</html>
<?php /**PATH D:\~Belajar\Backup\Belajar-BrezeREDESIGN\resources\views/layouts/admin.blade.php ENDPATH**/ ?>