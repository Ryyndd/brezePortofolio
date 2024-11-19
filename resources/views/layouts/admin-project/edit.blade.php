
<x-admin-layout class=" h-full ">
    <x-slot name="header" class="mt-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Edit') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 ">
        <div class="py-8 px-4 mt-10 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new Project</h2>

            <form action="{{ route('project.update', $project->pro_slug) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2 mt-4">
                        <div class="bg-gray-400 h-60 rounded-md">
                            <div class="relative">
                                <label for="file-upload" class="hover:saturate-0 cursor-pointer">
                                    <img id="image-preview" src="{{ $project->pro_image ? asset('storage/project/' . $project->pro_image) : '' }}" alt="image preview" class="object-cover w-full h-60 rounded-md ">
                               
                                    <i class="fi fi-sr-add-image text-2xl text-white mix-blend-difference z-10 text-md inset-0 flex items-center justify-center opacity-0 hover:opacity-100 absolute "></i>
                                </label>
                                <input type="file" id="file-upload" class="hidden absolute" name="pro_image" accept="image/*">
                            </div>
                        </div>
                        @error('pro_image')
                        <div class="alert alert-danger mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="pro_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="pro_title" id="pro_title" value="{{ old('pro_title' , $project->pro_title) }}" class="@error('pro_title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="input title" required>
                    </div>
                    @error('pro_title')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    <!-- Category Selection -->
                    <div class="sm:col-span-2">
                        <label for="pro_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Category</label>
                        <select id="pro_category" name="pro_category" class="@error('pro_category') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="" disabled selected>Choose a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category }}" {{ old('pro_category', $project->pro_category) == $category ? 'selected' : '' }}>
                                    {{ ucfirst($category) }}
                                </option>
                            @endforeach
                        </select>
                        @error('pro_category')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    {{-- <div class="sm:col-span-2">
                        <div class="form-group w-full">
                            <label for="tech" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Techstack</label>
                            <select id="tech" name="tech_ids[]" class="selectMultiple bg-gray-50 border py-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                                @foreach($project->techstack as $tech)
                                <option value="{{ $tech->id }}" {{ $project->techstacks && $project->techstacks->contains($tech->id) ? 'selected' : '' }}>
                                    {{ ucfirst($tech->tech_name) }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="sm:col-span-2">
                        <div class="form-group w-full">
                            <label for="tech" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Techstack</label>
                            <select id="tech" name="tech_ids[]" class="@error('pro_stack') is-invalid @enderror selectMultiple bg-gray-50 border py-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple>
                                @foreach($techstack as $tech) <!-- Pastikan menggunakan variabel $techstack untuk iterasi semua opsi -->
                                    <option value="{{ $tech->id }}" 
                                        {{ $project->techstacks && $project->techstacks->contains($tech->id) ? 'selected' : '' }}>
                                        {{ ucfirst($tech->tech_name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('pro_stack')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    <div class="sm:col-span-2">
                        <div class="flex gap-4">
                            <div class="flex-1">
                                <label for="pro_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Source</label>
                                <input type="text" name="pro_source" id="pro_source" value="{{ old('pro_source' , $project->pro_source) }}" class="@error('pro_source') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="input link">
                            </div>
                            <div class="flex-1">
                                <label for="pro_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Preview</label>
                                <input type="text" name="pro_preview" id="pro_preview" value="{{ old('pro_preview' , $project->pro_preview) }}" class="@error('pro_preview') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="input link">
                            </div>
                        </div>
                        @error('pro_source')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('pro_preview')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="pro_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="pro_description" name="pro_description" rows="8" class="@error('pro_description') is-invalid @enderror block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="techstack description">{{ old('tech_description', $project->pro_description) }}</textarea>
                    </div>
                    @error('pro_description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="w-full flex justify-between">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Update Project
                    </button>
                    <a href="{{ route('project.index') }}">
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#tech").select2({
                    width: '100%',
                    maximumSelectionLength: 3 // Menetapkan batas maksimal pemilihan menjadi 3
                });
            });
        </script>
</x-admin-layout>