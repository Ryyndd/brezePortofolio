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
                                    {{ __('Message') }}
                                </h2>
                        </div>
                        <div class="w-full gap-4 md:w-1/2 flex justify-between">
                            <form class="flex items-center" action="{{ route('message.index') }}" method="GET" >
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
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Message
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $messages as $message )
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex justify-center items-center">
                            <h2>{{ $message->id }}</h2>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{ $message->message_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $message->message_email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ Str::limit($message->message_message,50) }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $message->created_at->format('d M Y') }}
                    </td>
                    <td class="px-2 py-4 ">
                        <form id="delete-form-{{ $message->id }}" action="{{ route('message.destroy', $message->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        
                        <button type="button" onclick="confirmDelete('{{ $message->id }}')" class="font-medium text-red-600 dark:text-blue-500 hover:underline">
                            Delete
                        </button>
                        
                    </td>
                </tr>
                @endforeach
            </tbody> 
        </table>
        <div class="w-full bg-white px-5 py-3">
            {{ $messages->links() }}
        </div>
    </div>


</x-admin-layout>    