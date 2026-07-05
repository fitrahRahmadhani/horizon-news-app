@props([
    'items' => [],
])

<nav aria-label="Breadcrumb" {{ $attributes->class(['w-full']) }}>
    <ol class="flex items-center flex-wrap gap-2 text-sm text-gray-500">
        @foreach ($items as $index => $item)
            <li class="flex items-center gap-2">
                @if (!$loop->last && !empty($item['url']))
                    <a href="{{ $item['url'] }}" class="hover:text-gray-900 transition-colors duration-150">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-gray-900 font-medium" aria-current="page">
                        {{ $item['label'] }}
                    </span>
                @endif

                @unless ($loop->last)
                    <span class="text-gray-400">/</span>
                @endunless
            </li>
        @endforeach
    </ol>
</nav>