<header>
    <nav id="onScrol-hide" class="fixed top-0 z-50 w-full backdrop-blur-md">
    
        <div class="flex w-full lg:w-4/5 m-auto flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            
            <span class=" font-bold martian-mono text-black flex items-center text-2xl "> ferynnd. </span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <a href="<?php echo e(route('blog.page')); ?>" >
                <button type="button" class="font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] rounded-full ">My Blogs</button>
            </a>
            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
        <ul class="flex flex-col  martian-mono font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row   md:mt-0 md:border-0 dark:border-gray-700">
            <li>
            <a href="/" class="block py-2 px-3 md:p-0 text-gray-900 hover:underline" aria-current="page">Home</a>
            </li>
            <li>
            <a href="<?php echo e(route('about.page')); ?>" class="block py-2 px-3 md:p-0 text-gray-900 hover:underline">About</a>
            </li>
            <li>
            <a href="<?php echo e(route('project.page')); ?>" class="block py-2 px-3 md:p-0 text-gray-900 hover:underline">Project</a>
            </li>
            <li>
            <a href="#contact" class="block py-2 px-3 md:p-0 text-gray-900 hover:underline">Contact</a>
            </li>
        </ul>
        </div>
        </div>
    </nav>

</header><?php /**PATH D:\~Belajar\Backup\Belajar-BrezeREDESIGN\resources\views/components/nav-app.blade.php ENDPATH**/ ?>