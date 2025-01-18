<x-layout>
    <x-slot name="title">{{ $job->title }}</x-slot>
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->description }}</p>
    <a href="/jobs/{{ $job->id }}/edit">Edit</a>
</x-layout>
