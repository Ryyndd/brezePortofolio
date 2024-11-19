<x-app-layout>
        <section id="hero" class="relative lg:min-h-dvh min-h-dvh  flex justify-center items-center">
            <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="900" data-aos-easing="ease-in-out" class="px-4 py-10 mx-auto max-w-7xl sm:px-6 lg:px-8 relative> " >
                <div class="w-full text-center ">
                    <h1 class="text-2xl sm:text-3xl md:text-6xl lg:text-5xl xl:text-7xl font-bold">
                        <span class=" text-transparent bg-clip-text bg-gradient-to-r from-black to-gray-500 text-shadow shadow-gray-600 jetbrains-mono "> Hi I'm FERRY FERNANDO 
                            <br>
                           <span class="text-typing bg-clip-text m-4 bg-gradient-to-r from-black to-gray-500 text-4xl sm:text-5xl md:text-6xl lg:text-5xl xl:text-7xl font-bold"></span>
                        </span> 
                    </h1>
                </div>
                <div class="max-w-xl mx-auto text-center">
                    <p class="mt-5 text-md text-black sm:text-md jetbrains-400 "> Innovating with Code, Creating with Passion </p>
        
                    <button
                        class="nline-flex items-center mt-8  duration-200 font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs px-6 py-4  border border-gray-900 text-gray-900 hover:opacity-75 focus:ring hover:bg-gray-900 hover:text-white focus:ring-gray-300 active:opacity-[0.85] rounded-full"
                        type="button">
                        Get Resume
                    </button>
                </div>
            </div>
        </section>

    <section id="about" class="lg:min-h-dvh min-h-dvh  flex justify-center items-center martian-mono " >
        <div class="w-full flex justify-center items-center " data-aos="fade-up" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="px-4 x-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="grid items-center grid-cols-1 gap-10 md:grid-cols-2">
                    <div>
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-4xl">Hey I am <br class="block sm:hidden" /> Ferry Fernando </h2>
                        <p class="max-w-lg mt-3 text-lg leading-relaxed text-gray-700 md:mt-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        
                        <p class="mt-4 text-xl text-gray-700 md:mt-8">
                            <span class="relative inline-block">
                                <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                                <span class="relative"> Have a question? </span>
                            </span>
                            <br class="block sm:hidden" />Contact me  <a href="#" title="" class="transition-all duration-200 text-purple-500 hover:text-purple-600 hover:underline">Instagram</a>
                        </p>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <img class="relative bg-gray-800 bg-clip-content rounded-full w-[98%] h-[98%] sm:scale-75 xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-90 hover:shadow-xl hover:stroke-gray-600 "  src="{{ asset('asset/foto-profile.png') }}" alt="" />
                    </div>
                    
                    
                </div>
            </div>
        </div>
        {{-- @include('components.infinity') --}}
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
    </section>

    <section id="projects" class=" lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono lg:h-dvh">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="max-w-xl mx-auto text-center">
                <div class="inline-flex px-5 mt-14  py-2 mx-auto rounded-full bg-gradient-to-r from-black to-gray-600">
                    <p class="text-xs font-semibold tracking-widest text-white uppercase"> My Latest Project </p>
                </div>
                <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">MY PROJECT</h2>
                <p class="mt-4 text-base leading-relaxed text-gray-700">These are some of the results of projects that I have completed.</p>
            </div>
    
            <div class="grid justify-items-center md:justify-items-center lg:grid-cols-3 gap-5 mt-12 sm:grid-cols-1 lg:mt-14 lg:gap-x-5">
            
                <div class="max-w-sm h-[420px] shadow-sm rounded-2xl bg-transparent" >
                    <a href="https://github.com/hamdaniqhmqd/AgroPupuk" target="_blank">
                        <img class="rounded-lg shadow" src="{{ asset('asset/web-agropupuk.png') }}" alt="agropupuk" />
                    </a>
                    <div class="p-5">
                        <div class="flex mb-2 text-black items-center gap-4"> 
                            <a href="https://github.com/hamdaniqhmqd/AgroPupuk" target="_blank" >
                                <h5 class="text-xl font-semibold hover:underline">AGROPUPUK </h5>
                            </a>
                            |
                            <a href="https://github.com/hamdaniqhmqd/AgroPupuk" target="_blank" >
                                <h5 class="text-xl font-semibold uppercase hover:underline"> Website </h5>
                            </a>
                        </div>
                        <p class="mb-3 text-xs text-gray-700">Website Agropupuk merupakan website yang dibuat untuk membantu petani- petani</p>
                         <div class="flex gap-2 my-5">
                             <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full text-orange-500 bg-orange-300 bg-transparent hover:bg-orange-400 hover:text-white "> HTML </span>
                             <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full text-blue-500 bg-blue-300 bg-transparent hover:bg-blue-400 "> CSS </span>
                             <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full text-cyan-500 bg-cyan-300 bg-transparent hover:bg-cyan-200"> taildwind </span>
                         </div>
                         <a href="https://github.com/hamdaniqhmqd/AgroPupuk" target="_blank" class="relative inline-block" >
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                            <span class="relative text-sm text-gray-800 hover:text-orange-500"> Source Code </span>
                        </a>
                         <a href="https://agropupuk.infitechd.my.id/" target="_blank" class="relative inline-block" >
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                            <span class="relative text-sm text-gray-800 hover:text-orange-500"> Preview </span>
                        </a>
                        
                    </div>
                </div>
                <div class="max-w-sm h-[420px] shadow-sm rounded-2xl bg-transparent" >
                    <a href="https://github.com/Ryyndd/MarketSpare" target="_blank" >
                        <img class="rounded-lg shadow" src="{{ asset('asset/market-spare.png') }}" alt="marketspare" />
                    </a>
                    <div class="p-5">
                        <div class="flex mb-2 text-black items-center gap-4"> 
                            <a href="https://github.com/Ryyndd/MarketSpare"target="_blank" >
                                <h5 class="text-xl font-semibold hover:underline">MARKETSPARE</h5>
                            </a>
                            |
                            <a href="#" target="_blank" >
                                <h5 class="text-xl font-semibold uppercase hover:underline"> DEKSTOP </h5>
                            </a>
                        </div>
                        <p class="mb-3 text-xs text-gray-700">Market Spare merukapan sebuah aplikasi berbasis dekstop yang dibuat </p>
                        <div class="flex gap-2 my-5">
                            <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full hover:text-white text-blue-700 bg-blue-400 bg-transparent hover:bg-blue-600 "> JAVA </span>
                        </div>
                        <a href="#" target="_blank" class="relative inline-block" >
                           <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                           <span class="relative text-sm text-gray-800 hover:text-orange-500"> Source Code </span>
                       </a>
                    </div>
                </div>
                <div class="max-w-sm h-[420px] shadow-sm rounded-2xl bg-transparent " >
                    <a href="https://github.com/Ryyndd/MarketStore" target="_blank" >
                        <img class="rounded-lg shadow" src="{{ asset('asset/market-store.jpg') }}" alt="marketstore" />
                    </a>
                    <div class="p-5">
                        <div class="flex mb-2 text-black items-center gap-4"> 
                            <a href="https://github.com/Ryyndd/MarketStore" target="_blank" >
                                <h5 class="text-xl font-semibold hover:underline">MARKETSTORE</h5>
                            </a>
                            |
                            <a href="#" target="_blank" >
                                <h5 class="text-xl font-semibold uppercase hover:underline"> MOBILE </h5>
                            </a>
                        </div>
                        <p class="mb-3 text-xs text-gray-700">Market Store adalah sebuah aplikasi berbasis mobile </p>
                        <div class="flex gap-2 my-5">
                            <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full hover:text-white text-teal-400 bg-teal-200 bg-transparent hover:bg-teal-300 "> KOTLIN </span>
                        </div>
                        <a href="#" target="_blank" class="relative inline-block" >
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                            <span class="relative text-sm text-gray-800 hover:text-orange-500"> Source Code </span>
                        </a>
                    </div>
                </div>
            
            </div>

            <div class="w-full text-center mt-10">
                <a href="#" class=" text-xl font-bold leading-tight text-black sm:text-xl lg:text-2xl hover:underline">ALL PROJECT</a>
            </div>

        </div>

    </section> 

        <section class=" lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl md:mt-10 sm:mt-20"  data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="max-w-full mx-auto flex justify-between">
                    <h2 class="text-2xl font-bold leading-tight text-black sm:text-2xl lg:text-3xl">Latest blog</h2>
                    <a href="#" class="text-2xl  font-bold leading-tight text-black hover:underline sm:text-xl lg:text-xl"> Goto Blog</a>
                </div>
        
                <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-full rounded-xl" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-1.jpg" alt="" />
                        </a>
                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black hover:underline"> How to mange your remote team? </a>
                        </p>
                        <p class="mt-4 text-xs text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                        <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Ferry Fernando . June 12, 2021 </span>
                    </div>
        
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-full rounded-xl" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg" alt="" />
                        </a>
                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black hover:underline"> 6 Product launching emails you want to use on next campaign. </a>
                        </p>
                        <p class="mt-4 text-xs text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                        <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Ferry Fernando . June 12, 2021 </span>
                    </div>
        
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-full rounded-xl" src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-3.jpg" alt="" />
                        </a>
                        <p class="mt-6 text-xl font-semibold">
                            <a href="#" title="" class="text-black hover:underline"> Learn from the best: 7 email marketing ideas you can use </a>
                        </p>
                        <p class="mt-4 text-xs text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                        <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                        <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Ferry Fernando . June 12, 2021 </span>
                    </div>
                </div>
            </div>
        </section>
        


    <section id="contact" class="lg:min-h-dvh min-h-dvh">
        <div class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">CONTACT ME</h2>
                    <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-700">Contact me to collaborate or need help.</p>
                </div>
                <div class=" bg-transparent border-gray-700  rounded-md" data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out">
                        <div class="px-6 py-12 sm:p-12">
                            <form action="#" method="POST" class="mt-5">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-5 gap-y-4">
                                    <div>
                                        <label for="" class="text-base font-medium text-gray-800"> Your name </label>
                                        <div class="mt-2.5 relative">
                                            <input type="text" name="" id="" placeholder="Enter your full name" class="block w-full px-4 py-4 text-gray-800 rounded-xl placeholder:text-md placeholder-gray-700 transition-all duration-200  border bg-transparent" />
                                        </div>
                                    </div>
        
                                    <div>
                                        <label for="" class="text-base font-medium text-gray-800"> Email address </label>
                                        <div class="mt-2.5 relative">
                                            <input type="email" name="" id="" placeholder="Enter your full name" class="block w-full px-4 py-4 text-gray-800 rounded-xl  placeholder:text-md placeholder-gray-700 transition-all duration-200 border bg-transparent" />
                                        </div>
                                    </div>
        
                                    <div>
                                        <label for="" class="text-base font-medium text-gray-800"> Phone number </label>
                                        <div class="mt-2.5 relative">
                                            <input type="tel" name="" id="" placeholder="Enter your full name" class="block w-full px-4 py-4 text-gray-800 rounded-xl placeholder:text-md placeholder-gray-700 transition-all duration-200  border bg-transparent" />
                                        </div>
                                    </div>
        
                                    <div>
                                        <label for="" class="text-base font-medium text-gray-800"> Company name </label>
                                        <div class="mt-2.5 relative">
                                            <input type="text" name="" id="" placeholder="Enter your full name" class="block w-full px-4 py-4 text-gray-800 rounded-xl placeholder:text-md placeholder-gray-700 transition-all duration-200  border bg-transparent" />
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-2">
                                        <label for="" class="text-base font-medium text-gray-800"> Message </label>
                                        <div class="mt-2.5 relative">
                                            <textarea name="" id="" placeholder="" class="block w-full px-4 py-4 text-gray-800 placeholder-gray-500 transition-all duration-200 border bg-transparent rounded-xl resize-y " rows="4"></textarea>
                                        </div>
                                    </div>
        
                                    <div class="sm:col-span-2">
                                        <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-4 mt-2 text-base font-semibold text-white transition-all duration-200 bg-gray-800 border border-transparent rounded-xl focus:outline-none hover:bg-gray-600">
                                            Send
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="py-12">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center xl:flex xl:items-center xl:justify-between xl:text-left">
                    <div class="xl:flex sm:justify-center xl:items-center xl:justify-start">
                        <a href="#" class="flex items-center  w-auto mx-auto h-7">
                            {{-- <img src="{{ asset('asset/logo.png') }}" width="150" height="100" alt="" /> --}}
                            <span class=" font-bold martian-mono text-black flex items-center text-2xl "> ferynnd. </span>
                        </a>
        
                        <p class="mt-5 text-sm text-gray-800 xl:ml-6 xl:mt-0">© Copyright 2024 - All Rights Reserved</p>
                    </div>
        
                    <div class="items-center mt-8 xl:mt-0 xl:flex xl:justify-end xl:space-x-8">
                        <ul class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 xl:justify-end">
                            <li>
                                <a href="#" title="" class="text-sm text-gray-800 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> About </a>
                            </li>
        
                            <li>
                                <a href="#" title="" class="text-sm text-gray-800 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Contact </a>
                            </li>
        
                            <li>
                                <a href="#" title="" class="text-sm text-gray-800 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80"> Terms & Conditions </a>
                            </li>
                        </ul>
        
                        <div class="w-full h-px mt-8 mb-5 xl:w-px xl:m-0 xl:h-6 bg-gray-50/20"></div>
        
                        <ul class="flex items-center justify-center space-x-8 xl:justify-end">
                            <li>
                                <a href="#" title="" class="block text-black transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
        
                            <li>
                                <a href="#" title="" class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                    </svg>
                                </a>
                            </li>
        
                            <li>
                                <a href="#" title="" class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                                        ></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-app-layout>