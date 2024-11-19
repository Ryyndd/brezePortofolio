<x-app-layout>

    <section id="about" class="lg:min-h-dvh min-h-dvh  flex justify-center items-center martian-mono " >
        <div class="w-full flex justify-center items-center " data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="px-4 x-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
                    <div>
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-4xl">I am <br class="block sm:hidden" /> Ferry Fernando </h2>
                        <p class="max-w-lg mt-3 text-md leading-relaxed text-gray-700 md:mt-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        
                        <p class="mt-4 text-xl text-gray-700 md:mt-8">
                            <span class="relative inline-block">
                                <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                                <span class="relative"> Have a question? </span>
                            </span>
                            <br class="block sm:hidden" />Contact me  <a href="#" title="" class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">Twitter</a>
                        </p>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <img class="relative bg-gray-800 bg-clip-content rounded-full w-[98%] h-[98%] sm:scale-75 xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-90 hover:shadow-xl hover:stroke-gray-600 "  src="{{ asset('asset/foto-profile.png') }}" alt="" />
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class=" lg:min-h-dvh min-h-dvh  flex justify-center items-center martian-mono">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl sm:pt-16">
            <div class="max-w-2xl mx-auto text-center" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">MY TECH STACK</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700">Tech Stack is a Technology Skill that I have mastered and have learned.</p>
            </div>
    
                <div class="grid grid-cols-1 gap-6 mt-12 lg:mt-16 xl:gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ( $techstack as $tech )
                        
                    <div class="overflow-hidden bg-gray-700 rounded-xl stroke-gray-800 stroke-1 shadow" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <div class="p-8">
                            <div class="flex items-center">
                                <img class="flex-shrink-0 w-12 h-auto"  src="{{ asset('/storage/techstack/'.$tech->tech_image) }}"  alt="{{ $tech->tech_slug }}" />
                                <div class="ml-5 mr-auto">
                                    <p class="text-xl font-semibold text-white">{{ $tech->tech_name }}</p>
                                    <p class="mt-px text-xs text-gray-100">{{ $tech->tech_fullname }}</p>
                                </div>
                            </div>
                            <p class="text-xs leading-relaxed text-gray-100 mt-7">{{ $tech->tech_description }}</p>
                        </div>
                    </div>

                    @endforeach
                
                </div>
            </div>
        </div>
    </section>
    
</x-app-layout>