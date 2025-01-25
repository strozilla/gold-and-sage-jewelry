@props(['url' => '/', 'active' => false, 'icon' => null, 'mobile' => false])

@if ($mobile)
    <a href="{{ $url }}" class="block font-sans px-4 py-2 hover:bg-primary-light {{ $active ? 'font-bold text-secondary' : 'text-cream'}}">
        @if($icon)
            <i class="fa fa-{{ $icon }}"></i>
        @endif
        {{ $slot }}
    </a>
@else
<a href="{{ $url }}" class="font-sans py-2 hover:underline {{ $active ? 'font-bold text-secondary' : 'text-cream'}}">
    @if($icon)
    <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>

@endif
