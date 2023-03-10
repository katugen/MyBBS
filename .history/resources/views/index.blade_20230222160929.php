<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBBS</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>

<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            @forelse ($posts as $index => $post)
                <li>
                    <a href="route('posts.show',)">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse
        </ul>
    </div>
</body>

</html>
