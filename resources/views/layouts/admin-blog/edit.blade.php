
<x-admin-layout class=" h-full ">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <x-slot name="header" class="mt-10">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blog Edit') }}
        </h2>
    </x-slot>

    <section class="bg-white dark:bg-gray-900 ">
        <div class="py-8 px-4 mt-10 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit a blog</h2>

            <form action="{{ route('blog.update', $blog->blog_slug) }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                @method('PUT')
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2 mt-4">
                        <div class="bg-gray-400 h-60 rounded-md">
                            <div class="relative">
                                <label for="file-upload" class="hover:saturate-0 cursor-pointer">
                                    <img id="image-preview" src="{{ $blog->blog_image ? asset('storage/blog/' . $blog->blog_image) : '' }}" alt="image preview" class="object-cover w-full h-60 rounded-md ">
                                    <i class="fi fi-sr-add-image text-2xl text-white mix-blend-difference z-10 text-md inset-0 flex items-center justify-center opacity-0 hover:opacity-100 absolute "></i>
                                </label>
                                <input type="file" id="file-upload" class="hidden absolute" name="blog_image" accept="image/*">
                            </div>
                        </div>
                        @error('blog_image')
                        <div class="alert alert-danger mt-2 text-sm text-red-600">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="blog_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="blog_title" id="blog_title" value="{{ old('blog_title' , $blog->blog_title) }}" class="@error('blog_title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="input title" required>
                    </div>
                    @error('blog_title')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                    
                    
                    <div class="sm:col-span-2">
                        <label for="blog_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                        <div id="editor" class="border border-gray-300 rounded-lg p-2 h-60">
                            <p>{!! old('blog_content', $blog->blog_content) !!}</p>
                        </div>
                        <input type="hidden" name="blog_content" id="blog_content">
                    </div>

                    <div class="sm:col-span-2 mt-20">
                        <label for="blog_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select status</label>
                        <select 
                            id="blog_status" 
                            name="blog_status" 
                            class="@error('blog_status') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                            required>
                            <option value="" disabled {{ old('blog_status', $blog->blog_status ?? '') == '' ? 'selected' : '' }}>Choose a status</option>
                            <option value="public" {{ old('blog_status', $blog->blog_status ?? '') == 'public' ? 'selected' : '' }}>Public</option>
                            <option value="private" {{ old('blog_status', $blog->blog_status ?? '') == 'private' ? 'selected' : '' }}>Private</option>
                        </select>
                        @error('blog_status')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    
                </div>
                <div class="w-full flex justify-between">
                    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Update blog
                    </button>
                    <a href="{{ route('blog.index') }}">
                        <button type="button" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-red-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-red-900 hover:bg-red-800">
                            Back
                        </button>
                    </a>
                </div>
            </form>
            

        </div>
      </section>
      <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

       <!-- Initialize Quill editor -->
       <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
    
         // Ambil elemen input tersembunyi
        const blogContentInput = document.getElementById('blog_content');

        // Perbarui nilai input setiap kali konten editor berubah
        quill.on('text-change', function () {
            blogContentInput.value = quill.root.innerHTML;
        });

        // Set nilai awal jika ada
        blogContentInput.value = quill.root.innerHTML;
    </script>
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