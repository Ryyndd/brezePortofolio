<x-app-layout>


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
                        <img class="relative bg-gray-800 bg-clip-content rounded-full w-[98%] h-[98%] sm:scale-75 xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-90 hover:shadow-xl hover:stroke-gray-600" src="{{ asset('asset/foto-profile.png') }}" alt="" />
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
                <div class="flex space-x-6 overflow-x-scroll snap-x snap-mandatory scrollbar-hide" x-data="{ activeIndex: 0 }" x-init="setInterval(() => activeIndex = (activeIndex + 1) % {{ count($achievements) }}, 5000)">
                    @foreach ($achievements as $index => $achievement)
                        <div 
                            class="flex-shrink-0 w-96 snap-centerrounded-lg shadow-md p-4 transition-transform duration-300"
                            x-show="activeIndex === {{ $index }}" 
                            x-transition:enter="transform transition ease-in-out duration-500"
                            x-transition:enter-start="translate-x-full"
                            x-transition:enter-end="translate-x-0"
                            x-transition:leave="transform transition ease-in-out duration-500"
                            x-transition:leave-start="translate-x-0"
                            x-transition:leave-end="-translate-x-full"
                        >
                            <x-achievement-card 
                                :image="$achievement['image']"
                                :title="$achievement['title']"
                                :description="$achievement['description']"
                                :source="$achievement['source']"
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@props(['techstack'])

<section id="skills" class="lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl sm:pt-16">
        <div class="max-w-2xl mx-auto text-center framer-motion-wrapper" 
             data-animation='{"initial": {"opacity": 0, "y": 20}, "animate": {"opacity": 1, "y": 0}, "transition": {"duration": 0.8}}'>
            <h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-gray-100 sm:text-4xl lg:text-5xl">MY TECH STACK</h2>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700 dark:text-gray-300">Tech Stack is a Technology Skill that I have mastered and have learned.</p>
        </div>

        <div class="grid grid-cols-1 gap-6 mt-12 lg:mt-16 xl:gap-10 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($techstack as $index => $tech)
                <div class="framer-motion-wrapper" 
                     data-animation='{"initial": {"opacity": 0, "scale": 0.9}, "animate": {"opacity": 1, "scale": 1}, "transition": {"duration": 0.5, "delay": {{ $index * 0.1 }}}}'>
                    <div class="overflow-hidden bg-gray-700 rounded-xl stroke-gray-800 stroke-1 shadow transform transition duration-300 hover:scale-105">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto transition-transform duration-300 transform hover:rotate-12" src="{{ asset('/storage/techstack/'.$tech->tech_image) }}" alt="{{ $tech->tech_slug }}" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-white">{{ $tech->tech_name }}</p>
                                    <p class="mt-px text-xs text-gray-100">{{ $tech->tech_fullname }}</p>
                                </div>
                            </div>
                            <p class="text-xs leading-relaxed text-gray-100 mt-7">{{ $tech->tech_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>




</x-app-layout>