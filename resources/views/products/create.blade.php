<x-layout>
    <x-slot name="title">Add New Products</x-slot>
    <h1>Add New Products</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Job Title">
        <input type="text" name="description" placeholder="Job Description">
        <button type="submit">Add Product</button>
    </form>
</x-layout>
