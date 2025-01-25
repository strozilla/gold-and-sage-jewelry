@props(['url' => '/', 'icon' => null, 'bgClass' => 'bg-secondary', 'hoverClass' => 'hover:bg-secondary/80', 'textClass' => 'text-cream', 'block' => false])

<a href="{{ $url }}" class="{{ $block ? 'block text-center' : '' }} {{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded font-semibold hover:shadow-md transition duration-300">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
