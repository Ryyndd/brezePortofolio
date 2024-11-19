
  <x-admin-layout class=" h-full ">
    <x-slot name="header" class="mt-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Techstack Create') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 ">
        <div class="py-8 px-4 mt-10 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Techstack</h2>

            <form action="{{ route('techstack.store') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    {{-- <div class="sm:col-span-2">
                        <div class="bg-gray-100 h-32 hover:bg-blue-100 rounded">
                            <input type="file" id="file-upload" class="hidden" name="tech_image">
                            <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                                <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your image here</p>
                                <i class="fi fi-sr-add-image z-10 text-2xl text-indigo-400 "></i>
                            </label>
                        </div>
                    </div> --}}
                    <div class="sm:col-span-2 mt-4">
                        <div class="bg-gray-400 h-60 rounded-md">
                            <div class="relative">
                                <label for="file-upload" class="hover:saturate-0 cursor-pointer">
                                    <img id="image-preview" class="object-cover w-full h-60 rounded-md ">
                               
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
                        <input type="text" name="tech_name" id="tech_name" value="{{ old('tech_name') }}" class="@error('tech_name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack" required>
                    </div>
                    @error('tech_name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="sm:col-span-2">
                        <label for="tech_fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fullname</label>
                        <input type="text" name="tech_fullname" id="tech_fullname" value="{{ old('tech_fullname') }}" class="@error('tech_fullname') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack fullname" required>
                    </div>
                    @error('tech_fullname')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                     <!-- Color Selection -->
                     <div class="sm:col-span-2">
                        <label for="tech_color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Color</label>
                        <select id="tech_color" name="tech_color" class="@error('tech_color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" disabled selected>Choose a color</option>
                            @foreach($colors as $color)
                                <option value="{{ $color }}">{{ ucfirst($color) }}</option>
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
                        <textarea id="tech_description" name="tech_description" rows="8" class="@error('tech_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack description">{{ old('tech_description') }}</textarea>
                    </div>
                    @error('tech_description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full flex justify-between">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Add Techstack
                    </button>
                    <a href="{{ route('techstack.index') }}">
                        <button type="button" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-red-900 hover:bg-red-800">
                            Back
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