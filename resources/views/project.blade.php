<x-app-layout>

    <section id="projects" class=" lg:min-h-dvh min-h-dvh flex justify-center martian-mono mt-8 lg:h-dvh">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out">
            <div class="max-w-xl mx-auto text-center">
                <div class="inline-flex px-5 mt-14  py-2 mx-auto rounded-full bg-gradient-to-r from-black to-gray-600">
                    <p class="text-xs font-semibold tracking-widest text-white uppercase"> My Latest Project </p>
                </div>
                    <a href="{{ route('project.page') }}" target="_blank" class="hover:underline">
                        <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">MY PROJECT</h2>
                    </a>
                <p class="mt-4 text-base leading-relaxed text-gray-700">These are some of the results of projects that I have completed.</p>


                <form class="w-full my-4">
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg></button>
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                            </ul>
                        </div>
                        <div class="relative w-full">
                            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300  dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Project..." required />
                            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-gray-900 rounded-e-lg border  hover:bg-gray-700 focus:ring-4 focus:outline-none ">
                                <svg class=" w-6 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
    
            <div class="grid justify-items-center md:justify-items-center lg:grid-cols-3 gap-5 mt-12 sm:grid-cols-1 lg:mt-14 lg:gap-x-5">
                @foreach ($project as $project)
                <div class="max-w-sm h-[420px] hover:shadow-xl shadow-sm rounded-2xl bg-transparent">
                    <a href="{{ $project->link ?? '#' }}" target="_blank">
                        <img class="rounded-lg shadow" src="{{ asset('/storage/project/'.$project->pro_image) }}" alt="{{$project->pro_title}}" />
                    </a>
                    <div class="p-5">
                        <div class="flex mb-2 text-black items-center gap-4">
                            <a href="{{ $project->pro_preview ?? '#' }}" target="_blank">
                                <h5 class="text-xl font-semibold hover:underline">{{ $project->pro_title }}</h5>
                            </a>
                            |
                            <a disable >
                                <h5 class="text-xl font-semibold uppercase hover:underline">{{ $project->pro_category }}</h5>
                            </a>
                        </div>
                        <p class="mb-3 text-xs text-gray-700">{{ Str::limit($project->pro_description, 50) }}</p>
                        <div class="flex gap-2 my-5">
                            @foreach ($project->techstack as $tech)
                                <span class="inline-flex px-2 py-1 text-xs tracking-widest uppercase rounded-full text-{{ $tech->tech_color }}-500 bg-{{ $tech->tech_color }}-300 hover:bg-{{ $tech->tech_color }}-400 hover:text-white">
                                    {{ $tech->tech_name }}
                                </span>
                            @endforeach
                        </div>
                        <a href="{{ $project->pro_source ?? 'https://github.com/Ryyndd' }}" target="_blank" class="relative inline-block">
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                            <span class="relative text-sm text-gray-800 hover:text-orange-500"> Source Code </span>
                        </a>
                        <a href="{{ $project->pro_preview ?? '#' }}" target="_blank" class="relative inline-block">
                            <span class="absolute inline-block w-full bottom-0.5 h-2 bg-gray-400"></span>
                            <span class="relative text-sm text-gray-800 hover:text-orange-500"> Preview </span>
                        </a>
                    </div>
                </div>
            @endforeach
            
                
    </section> 
    
</x-app-layout>