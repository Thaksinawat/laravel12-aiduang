@props(['title', 'content' => null, 'sourceUrl' => '#'])

<div class="p-4 bg-white shadow rounded-lg">
    <h2 class="text-xl font-bold mb-2">
        <a href="{{ $sourceUrl }}" class="text-blue-600 hover:underline">
            {{ $title }}
        </a>
    </h2>
    @if($content)
    <p class="text-gray-700 text-sm">{{ $content }}</p>
    @endif
</div>