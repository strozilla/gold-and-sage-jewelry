<x-layout>
    <x-slot name="title">Gold & Sage | Sage Style, Gold Standard.</x-slot>
    <h1 class="font-sans font-bold text-xl">Available Products:</h1>
    <ul>
        @forelse($products as $product)
            <li>{{ $product }}</li>
            @empty
            <li>No jobs available</li>
        @endforelse
    </ul>
</x-layout>
