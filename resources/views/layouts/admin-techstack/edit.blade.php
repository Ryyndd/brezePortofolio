<x-admin-layout class="h-full">
    <x-slot name="header" class="mt-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Techstack Edit') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mt-10 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Techstack</h2>

            <form action="{{ route('techstack.update', $techstack->tech_slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <!-- Bagian input file -->
                    <div class="sm:col-span-2 mt-4">
                        <div class="bg-gray-400 h-60 rounded-md">
                            <div class="relative">
                                <label for="file-upload" class="hover:saturate-0 cursor-pointer">
                                    <img id="image-preview" src="{{ $techstack->tech_image ? asset('storage/techstack/' . $techstack->tech_image) : '' }}" alt="Image preview" class="object-cover w-full h-60 rounded-md style="display: {{ $techstack->tech_image ? 'block' : 'none' }}">
                                    <i class="fi fi-sr-add-image text-2xl text-white mix-blend-difference z-10 text-md inset-0 flex items-center justify-center opacity-0 hover:opacity-100 absolute "></i>
                                </label>
                                <input type="file" id="file-upload" class="hidden absolute" name="tech_image" accept="image/*">
                            </div>
                        </div>
                        @error('tech_image')
                        <div class="alert alert-danger mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="tech_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="tech_name" id="tech_name" value="{{ old('tech_name', $techstack->tech_name) }}" class="@error('tech_name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack" required>
                        @error('tech_name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tech_fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                        <input type="text" name="tech_fullname" id="tech_fullname" value="{{ old('tech_fullname', $techstack->tech_fullname) }}" class="@error('tech_fullname') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack fullname" required>
                        @error('tech_fullname')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   <!-- Color Selection -->
                    <div class="sm:col-span-2">
                        <label for="tech_color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Color</label>
                        <select id="tech_color" name="tech_color" class="@error('tech_color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" disabled>Select a color</option>
                            @foreach($colors as $color)
                                <option value="{{ $color }}" {{ old('tech_color', $techstack->tech_color) == $color ? 'selected' : '' }}>
                                    {{ ucfirst($color) }}
                                </option>
                            @endforeach
                        </select>
                        @error('tech_color')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <label for="tech_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="tech_description" name="tech_description" rows="8" class="@error('tech_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack description">{{ old('tech_description', $techstack->tech_description) }}</textarea>
                        @error('tech_description')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex items-center mt-3 space-x-4">
                    <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        Update Techstack
                    </button>
                    <a href="{{ route('techstack.index') }}">
                        <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            <svg class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            Delete
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </section>

    <script>
          document.getElementById('file-upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const imagePreview = document.getElementById('image-preview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
            imagePreview.style.display = 'none';
        }
    });
    </script>
</x-admin-layout>
