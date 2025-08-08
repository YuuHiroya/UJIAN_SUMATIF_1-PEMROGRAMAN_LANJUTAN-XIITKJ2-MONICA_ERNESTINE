@props(['desc'])

<a href="{{ $desc }}" class="bg-pink-400 px-6 py-2 rounded-lg text-white hover:bg-pink-500 transition-colors duration-300">
    {{ $slot }}
</a>