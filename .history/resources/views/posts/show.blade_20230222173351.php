<x-layout>
    <x-slot name="title">
        {{ $post }}-My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>{{ $post->title }}</h1>title
    <p>{{ $post->body }}</p>
</x-layout>
