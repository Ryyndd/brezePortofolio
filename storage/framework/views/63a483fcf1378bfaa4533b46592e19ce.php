<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section id="hero" class="relative lg:min-h-dvh min-h-dvh flex justify-center items-center">
        <div class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8 relative">
            <div class="w-full text-center">
                <h1 class="text-2xl sm:text-3xl md:text-6xl lg:text-5xl xl:text-7xl font-bold">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-gray-900 dark:from-gray-300 dark:to-gray-100 text-shadow shadow-gray-600 jetbrains-mono"> Hi I'm FERRY FERNANDO 
                        <br>
                        <span id="typing-text" class=" bg-clip-text m-4 bg-gradient-to-r from-gray-700 to-gray-900 dark:from-gray-300 dark:to-gray-100 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-7xl font-bold"></span>
                    </span> 
                </h1>
            </div>
            <div class="max-w-xl mx-auto text-center">
                <p class="mt-5 text-md text-gray-700 dark:text-gray-300 sm:text-md jetbrains-400"> Innovating with Code, Creating with Passion </p>
    
                <button
                data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'
                    class="framer-motion-wrapper inline-flex items-center mt-8 duration-200 font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs px-6 py-4 border border-gray-900 dark:border-gray-100 text-gray-900 dark:text-gray-100 hover:opacity-75 focus:ring hover:bg-gray-900 hover:text-white dark:hover:bg-gray-100 dark:hover:text-gray-900 focus:ring-gray-300 active:opacity-[0.85] rounded-full"
                    type="button">
                    Get Resume
                </button>
            </div>
        </div>
    </section>


    
    <section id="about" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono animate-on-scroll">
        <div class="w-full flex justify-center items-center">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
                    <div>
                        <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-4xl">Hey I am <br class="block sm:hidden" /> Ferry Fernando </h2>
                        <p class="max-w-lg mt-3 text-lg leading-relaxed text-gray-700 dark:text-gray-300 md:mt-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
    
                        <p class="mt-4 text-xl text-gray-700 dark:text-gray-300 md:mt-8">
                            <span class="relative inline-block">
                                <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400 dark:bg-gray-600"></span>
                                <span class="relative"> Have a question? </span>
                            </span>
                            <br class="block sm:hidden" />Contact me  <a href="#" title="" class="transition-all duration-200 text-purple-500 hover:text-purple-600 hover:underline">Instagram</a>
                        </p>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <img class="relative bg-gray-800 bg-clip-content rounded-full w-[98%] h-[98%] sm:scale-75 xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-90 hover:shadow-xl hover:stroke-gray-600" src="<?php echo e(asset('asset/foto-profile.png')); ?>" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono animate-on-scroll">
    <div class="w-full flex justify-center items-center">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center framer-motion-wrapper" 
                data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'>
                <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">MY ACHIEVEMENT</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">Tech Stack is a Technology Skill that I have mastered and have learned.</p>
            </div>

            <!-- Carousel Container -->
            <div class="relative mt-6">
                <!-- Carousel Items -->
                <div class="flex space-x-6 overflow-x-scroll snap-x snap-mandatory scrollbar-hide" x-data="{ activeIndex: 0 }" x-init="setInterval(() => activeIndex = (activeIndex + 1) % <?php echo e(count($achievements)); ?>, 5000)">
                    <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $achievement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div 
                            class="flex-shrink-0 w-96 snap-centerrounded-lg shadow-md p-4 transition-transform duration-300"
                            x-show="activeIndex === <?php echo e($index); ?>" 
                            x-transition:enter="transform transition ease-in-out duration-500"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="-translate-x-full"
                        >
                            <?php if (isset($component)) { $__componentOriginale3a843f07e17c4baeda8a7fe86d8befc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3a843f07e17c4baeda8a7fe86d8befc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.achievement-card','data' => ['image' => $achievement['image'],'title' => $achievement['title'],'description' => $achievement['description'],'source' => $achievement['source']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('achievement-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($achievement['image']),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($achievement['title']),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($achievement['description']),'source' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($achievement['source'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3a843f07e17c4baeda8a7fe86d8befc)): ?>
<?php $attributes = $__attributesOriginale3a843f07e17c4baeda8a7fe86d8befc; ?>
<?php unset($__attributesOriginale3a843f07e17c4baeda8a7fe86d8befc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3a843f07e17c4baeda8a7fe86d8befc)): ?>
<?php $component = $__componentOriginale3a843f07e17c4baeda8a7fe86d8befc; ?>
<?php unset($__componentOriginale3a843f07e17c4baeda8a7fe86d8befc); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['techstack']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['techstack']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section id="skills" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl sm:pt-16">
        <div class="max-w-2xl mx-auto text-center framer-motion-wrapper" 
             data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'>
            <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">MY TECH STACK</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">Tech Stack is a Technology Skill that I have mastered and have learned.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 mt-12 lg:mt-16 xl:gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $techstack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="framer-motion-wrapper" 
                     data-animation='{"initial": {"opacity": 0, "scale": 0.9}, "animate": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": <?php echo e($index * 0.1); ?>}}'>
                    <div class="overflow-hidden bg-gray-700 rounded-xl stroke-gray-800 stroke-1 shadow transform transition duration-300 hover:scale-105">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto transition-transform duration-300 transform hover:rotate-12" src="<?php echo e(asset('/storage/techstack/'.$tech->tech_image)); ?>" alt="<?php echo e($tech->tech_slug); ?>" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-white"><?php echo e($tech->tech_name); ?></p>
                                    <p class="mt-px text-xs text-gray-100"><?php echo e($tech->tech_fullname); ?></p>
                                </div>
                            </div>
                            <p class="text-xs leading-relaxed text-gray-100 mt-7"><?php echo e($tech->tech_description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>




    


<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['project']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['project']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section id="projects" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono lg:h-dvh">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto text-center framer-motion-wrapper" 
             data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'>
            <div class="inline-flex px-5 mt-14 py-2 mx-auto rounded-full bg-gradient-to-r from-gray-700 to-gray-900 dark:from-gray-300 dark:to-gray-100">
                <p class="text-xs font-semibold tracking-widest text-white dark:text-gray-900 uppercase"> My Latest Project </p>
            </div>
            <h2 class="mt-6 text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">MY PROJECT</h2>
            <p class="mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">These are some of the results of projects that I have completed.</p>
        </div>

        <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12"">
        
            <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="framer-motion-wrapper" 
                     data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": <?php echo e($index * 0.1); ?>}}'>
                    <div class=" w-full h-auto hover:shadow-xl shadow-sm rounded-2xl bg-white dark:bg-gray-800 transform transition duration-300 hover:scale-105">
                    
                        <a href="<?php echo e($project->link ?? '#'); ?>" target="_blank" class="block overflow-hidden rounded-t-2xl">
                            <img class="object-cover w-full h-52 rounded-lg transition-transform duration-300 transform hover:scale-105" src="<?php echo e(asset('/storage/project/'.$project->pro_image)); ?>" alt="<?php echo e($project->pro_title); ?>" />
                        </a>
                        <div class="p-5">
                            <div class="flex mb-2 text-gray-900 dark:text-gray-100 items-center gap-4">
                                <a href="<?php echo e($project->pro_preview ?? '#'); ?>" target="_blank">
                                    <h5 class="text-xl font-semibold hover:underline"><?php echo e($project->pro_title); ?></h5>
                                </a>
                                |
                                <a disable >
                                    <h5 class="text-xl font-semibold uppercase hover:underline"><?php echo e($project->pro_category); ?></h5>
                                </a>
                            </div>
                            <p class="mb-3 text-xs text-gray-700 dark:text-gray-300"><?php echo e(Str::limit($project->pro_description, 50)); ?></p>
                            <div class="flex gap-2 my-5">
                                <?php $__currentLoopData = $project->techstack; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full text-<?php echo e($tech->tech_color); ?>-500 bg-<?php echo e($tech->tech_color); ?>-300 hover:bg-<?php echo e($tech->tech_color); ?>-400 hover:text-white transition-colors duration-300">
                                        <?php echo e($tech->tech_name); ?>

                                    </span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <a href="<?php echo e($project->pro_source ?? 'https://github.com/Ryyndd'); ?>" target="_blank" class="relative inline-block transition-all duration-300 hover:translate-x-1">
                                <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400 dark:bg-gray-600"></span>
                                <span class="relative text-sm text-gray-800 dark:text-gray-200 hover:text-orange-500"> Source Code </span>
                            </a>
                            <a href="<?php echo e($project->pro_preview ?? '#'); ?>" target="_blank" class="relative inline-block ml-4 transition-all duration-300 hover:translate-x-1">
                                <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400 dark:bg-gray-600"></span>
                                <span class="relative text-sm text-gray-800 dark:text-gray-200 hover:text-orange-500"> Preview </span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>




<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['blog']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['blog']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section id="blogs" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono lg:h-dvh">
    <div class="px-4 mx-auto max-w-7xl sm:px-6lg:px-8">
        <div class="max-w-xl mx-auto text-center framer-motion-wrapper" 
             data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'>
            <div class="inline-flex px-5 mt-14 py-2 mx-auto rounded-full bg-gradient-to-r from-gray-700 to-gray-900 dark:from-gray-300 dark:to-gray-100">
                <p class="text-xs font-semibold tracking-widest text-white dark:text-gray-900 uppercase"> My Latest Blogs </p>
            </div>
            <h2 class="mt-6 text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">MY BLOG</h2>
            <p class="mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">These are some of the results of blogs that I have completed.</p>
        </div>
        
        <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
            <?php $__currentLoopData = $blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="framer-motion-wrapper" 
                 data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.5, "delay": <?php echo e($index * 0.1); ?>}}'>
                <div class="transform transition duration-300 hover:scale-105">
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3 overflow-hidden rounded-lg">
                        <img class="object-cover w-full h-52 rounded-lg transition-transform duration-300 transform hover:scale-110" src="<?php echo e(asset('/storage/blog/'.$blogs->blog_image)); ?>" alt="<?php echo e($blogs->blog_slug); ?>" />
                    </a>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-gray-900 dark:text-gray-100 hover:underline"> <?php echo e($blogs->blog_title); ?></a>
                    </p>
                    <p class="mt-4 text-xs text-gray-600 dark:text-gray-400">
                        <?php echo e(Str::limit(strip_tags($blogs->blog_content), 50)); ?>

                    </p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 dark:border-gray-700 border-dashed"></div>
                    <p class="block text-sm font-bold tracking-widest text-gray-500 dark:text-gray-400 uppercase">
                        <?php echo e($blogs->user->name); ?> 
                        <span> 
                            <?php echo e($blogs->created_at->diffForHumans()); ?>

                        </span>
                    </p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section id="contact" class=" mt-10 animate-on-scroll">
        <div class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">CONTACT ME</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">Contact me to collaborate or need help.</p>
                </div>
                <div class="bg-transparent border-gray-700 rounded-md">
                    <div class="px-6 py-12 sm:p-12">
                        
                        <form action="<?php echo e(route('message.store')); ?>" method="POST" class="mt-5">
                            <?php echo csrf_field(); ?>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                <!-- Field untuk Nama -->
                                <div>
                                    <label for="message_name" class="text-base font-medium text-gray-900 dark:text-gray-100">Your name</label>
                                    <div class="mt-2.5 relative">
                                        <input 
                                            type="text" 
                                            name="message_name" 
                                            id="message_name" 
                                            pattern="^[a-zA-Z\s]+$"
                                            placeholder="Enter your full name" 
                                            class="block w-full px-4 py-4 text-gray-900 dark:text-gray-100 rounded-xl placeholder:text-md placeholder-gray-500 dark:placeholder-gray-400 transition-all duration-200 border bg-transparent dark:bg-gray-800"
                                            value="<?php echo e(old('message_name')); ?>"
                                        />
                                    </div>
                                    <?php $__errorArgs = ['message_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-2 text-red-600">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                        
                                <!-- Field untuk Email -->
                                <div>
                                    <label for="message_email" class="text-base font-medium text-gray-900 dark:text-gray-100">Email address</label>
                                    <div class="mt-2.5 relative">
                                        <input 
                                            type="email" 
                                            name="message_email" 
                                            id="message_email" 
                                            placeholder="Enter your email address" 
                                            class="block w-full px-4 py-4 text-gray-900 dark:text-gray-100 rounded-xl placeholder:text-md placeholder-gray-500 dark:placeholder-gray-400 transition-all duration-200 border bg-transparent dark:bg-gray-800"
                                            value="<?php echo e(old('message_email')); ?>"
                                        />
                                    </div>
                                    <?php $__errorArgs = ['message_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-2 text-red-600">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                        
                                <!-- Field untuk Pesan -->
                                <div class="sm:col-span-2">
                                    <label for="message_message" class="text-base font-medium text-gray-900 dark:text-gray-100">Message</label>
                                    <div class="mt-2.5 relative">
                                        <textarea 
                                            name="message_message" 
                                            id="message_message" 
                                            pattern="^[a-zA-Z\s]+$"
                                            placeholder="Enter your message" 
                                            class="block w-full px-4 py-4 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 transition-all duration-200 border bg-transparent dark:bg-gray-800 rounded-xl resize-y" 
                                            rows="4"><?php echo e(old('message_message')); ?></textarea>
                                    </div>
                                    <?php $__errorArgs = ['message_message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-2 text-red-600">
                                        <?php echo e($message); ?>

                                    </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                        
                                <!-- Tombol Kirim -->
                                <div class="sm:col-span-2">
                                    <button 
                                        type="submit" 
                                        class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-gray-900 dark:bg-gray-100 dark:text-gray-900 border border-transparent rounded-xl focus:outline-none hover:bg-gray-700 dark:hover:bg-gray-300 focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 dark:focus:ring-gray-100">
                                        Send
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

        
    <footer class="py-12 bg-gray-100 dark:bg-gray-800">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <!-- Logo dan Hak Cipta -->
            <div class="flex flex-col items-center space-y-4 text-center xl:flex-row xl:items-center xl:justify-between xl:space-y-0 xl:text-left">
                <div class="flex flex-col items-center space-y-2 xl:flex-row xl:items-center xl:space-y-0 xl:space-x-6">
                    <a href="#" class="flex items-center w-auto h-7">
                        <span class="font-bold text-2xl text-gray-900 dark:text-gray-100">ferynnd.</span>
                    </a>
                    <p class="text-sm text-gray-600 dark:text-gray-400">© Copyright 2024 - All Rights Reserved</p>
                </div>

                <!-- Menu Navigasi -->
                <ul class="flex flex-wrap justify-center gap-4 text-sm text-gray-700 dark:text-gray-300 xl:justify-end">
                    <li><a href="#" class="transition hover:text-opacity-80 focus:text-opacity-80">About</a></li>
                    <li><a href="#" class="transition hover:text-opacity-80 focus:text-opacity-80">Contact</a></li>
                    <li><a href="#" class="transition hover:text-opacity-80 focus:text-opacity-80">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Separator dan Media Sosial -->
            <div class="mt-8 border-t border-gray-200 dark:border-gray-700"></div>

            <div class="flex flex-col items-center mt-6 space-y-4 xl:flex-row xl:justify-between xl:space-y-0">
                <!-- Ikon Media Sosial -->
                <ul class="flex space-x-6">
                    <li>
                        <a href="#" class="text-gray-900 dark:text-gray-100 hover:text-opacity-80 focus:text-opacity-80">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M19.633 7.997c.013.175..." />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-gray-100 hover:text-opacity-80 focus:text-opacity-80">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.397 20.997v-8.196..." />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-900 dark:text-gray-100 hover:text-opacity-80 focus:text-opacity-80">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11.999 7.377a4.623 4.623..." />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</section> 


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\~Belajar\Backup\Belajar-BrezeREDESIGN\resources\views/home.blade.php ENDPATH**/ ?>