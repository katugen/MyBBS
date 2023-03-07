<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBBS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            {{-- <li><?php echo htmlspecialchars($posts[0], ENT_QUOTES, 'UTF-8'); ?></li> --}}
            <li>{{ $posts[0] }}</li>
            <li>{{ $posts[1] }}</li>
            <li>{{ $posts[2] }}</li>
        </ul>
        <ul>
            @foreach ($posts as $post )
            <li>{{ $post }}</li>

            @endforeach
        </ul>
    </div>
</body>
</html>
