<x-layout>
    <x-slot name="title">
        {{ $post->title }}-My BBS
    </x-slot>
    <div class="back-link">
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>
    <h1>
        <span>{{ $post->title }}</span>
        <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf
            <button class="btn">[x]</button>
        </form>
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <h2>Comments</h2>
    <ul>
        <li>
            <form method="post" action="{{ route('comments.store', $post) }}" class="comment-form">
                @csrf
                <input type="text" name="body">
                <button>Add</button>
            </form>
        </li>
        @foreach ($post->comments()->latest()->get() as $comment)
            <li>{{ $comment->body }}</li>
            <form method="post" action="" class="delete-">
                @method('DELETE')
                @csrf

                <button class="btn">[x]</button>
            </form>
        @endforeach
    </ul>

    <script>
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('本当に削除しますか？？')) {
                    return;
                }
                e.target.submit();
            })
        }
    </script>
</x-layout>