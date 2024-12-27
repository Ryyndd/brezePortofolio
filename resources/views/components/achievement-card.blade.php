@props(['image', 'title', 'description', 'source'])

<div class="relative overflow-hidden rounded-lg shadow-lg group">
    <div class="relative w-full h-96 transition-all duration-300 ease-in-out group-hover:blur-sm">
        <img src="{{ $image }}" alt="{{ $title }}" class="object-cover w-full h-full">
        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
            <p class="text-xl font-semibold text-white">
                <a href="#" title="" class="hover:underline">{{ $title }}</a>
            </p>
            <span class="text-xs text-gray-400">{{ $source }}</span>
        </div>
    </div>
    <div class="absolute inset-0 flex flex-col items-center justify-center p-4 text-center transition-all duration-300 ease-in-out bg-black bg-opacity-75 opacity-0 group-hover:opacity-100">
        <h3 class="mb-2 text-xl font-bold text-white">{{ $title }}</h3>
        <p class="mb-2 text-sm text-gray-300">{{ $description }}</p>
        <span class="text-xs text-gray-400">{{ $source }}</span>
    </div>
</div>