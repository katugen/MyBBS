<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>Add New Post </h1>
    <form method="post" action="">
<label for="">
    Title
    <input type="text name="title>
</label>

    </form>
</x-layout>
