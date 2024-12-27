<x-admin-layout class="h-dvh">

        <div class="mx-5 bg-white mt-24 overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left shadow-md rtl:text-right text-gray-500 dark:text-gray-400">
                <section class= dark:bg-gray-900">
                    <div class="w-full">
                    <!-- Start coding here -->
                    <div class="shadow-md dark:bg-gray-800 sm:rounded-lg">
                        <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                            <div class="w-full md:w-1/2 ">
                                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                                        {{ __('Techstack') }}
                                    </h2>
                            </div>
                            <div class="w-full gap-4 md:w-1/2 flex justify-between">
                                <form class="flex items-center" action="{{ route('techstack.index') }}" method="GET" >
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative flex-1">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                        </div>
                                        <input type="text" id="simple-search" name="search" value="{{ request('search') }}" class="block flex-1 w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                    </div>
                                </form>
                                <a href="{{ route('techstack.create') }}" >
                                    <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                        </svg>
                                        Techstack
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $techstack as $data )
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4">
                            <div class="flex justify-center items-center">
                                <h2>{{ $data->id }}</h2>
                            </div>
                        </td>
                        <td scope="row" class="flex items-center px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('/storage/techstack/'.$data->tech_image) }}" alt="Jese image">
                            {{-- <img class="w-10 h-10 rounded-full" src="{{ asset('asset/html.png') }}" alt="Jese image"> --}}
                            <div class="ps-3">
                                <div class="text-base font-semibold">{{ $data->tech_name }}</div>
                                <div class="font-normal text-gray-500">{{ $data->tech_fullname }}</div>
                            </div>  
                        </td>
                        <td class="px-6 py-4">
                            {{ Str::limit($data->tech_description,80) }}
                        </td>
                        <td class="px-2 py-4 ">
                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('techstack.destroy', $data->tech_slug) }}" method="POST">
                                <a  href="{{ route('techstack.edit', $data->tech_slug) }}" type="button"  class="font-medium me-3 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline">Delete</button>
                            </form> --}}
                            <form id="delete-form-{{ $data->tech_slug }}" action="{{ route('techstack.destroy', $data->tech_slug) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a  href="{{ route('techstack.edit', $data->tech_slug) }}" type="button"  class="font-medium me-3 text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <button type="button" onclick="confirmDelete('{{ $data->tech_slug }}')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="w-full bg-white px-5 py-3">
                {{ $techstack->links() }}
            </div>
        </div>


</x-admin-layout>    