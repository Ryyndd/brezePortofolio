<x-app-layout>

        <section class=" lg:min-h-dvh min-h-dvh flex justify-center items-center martian-mono">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl md:mt-10 sm:mt-20"  data-aos="fade-up" data-aos-delay="50" data-aos-duration="800" data-aos-easing="ease-in-out">
                <div class="max-w-full mx-auto flex justify-between">
                    <h2 class="text-2xl font-bold leading-tight text-black my-auto sm:text-2xl lg:text-3xl">Latest blog</h2>
                    {{-- <a href="#" class="text-2xl  font-bold leading-tight text-black hover:underline sm:text-xl lg:text-xl"> Goto Blog</a> --}}


                    <form class=" w-1/2">   
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white " placeholder="Search Our Blog..." required />
                            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2">Search</button>
                        </div>
                    </form>

                </div>
        
                <div class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                    <div>
                        <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                            <img class="object-cover w-full h-full rounded-xl" src="{{ asset('asset/market-store.jpg') }}" alt="" />
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
    
</x-app-layout>