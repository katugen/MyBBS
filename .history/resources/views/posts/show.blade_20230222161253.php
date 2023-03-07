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
        <div class="back-link">
            &laquo; <a href="{{ route('posts.index') }}">Back</a>
        </div>
        <h1>{{ $post }}</h1>
    </div>
</body>

</html>
