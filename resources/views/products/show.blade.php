<x-layout>
    <x-slot name="title">{{ $product->title }}</x-slot>
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    <a href="/products/{{ $product->id }}/edit">Edit</a>
</x-layout>
