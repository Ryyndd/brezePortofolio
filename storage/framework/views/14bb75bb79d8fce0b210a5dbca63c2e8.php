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


    <section id="about" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono animate-on-scroll">
        <span class="text-typing"></span>
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
                            <br class="block sm:hidden" />Contact me  <a href="#" title="" class="transition-all duration-200 text-purple-500 hover:text-purple-600 hover:underline">Instagram</a> --}}
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




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH D:\~Belajar\Backup\Belajar-BrezeREDESIGN\resources\views/about.blade.php ENDPATH**/ ?>