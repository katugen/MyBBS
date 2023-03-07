<x-layout>
    <x-slot name="title">
      Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1></h1>
    <p>{{ $post->body }}</p>
</x-layout>
