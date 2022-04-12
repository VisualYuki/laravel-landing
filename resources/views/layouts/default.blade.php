<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700|Roboto:400,500&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/css/normalize.css">
    <link rel="stylesheet" href="/frontend/css/fonts.css">
    <link rel="stylesheet" href="/frontend/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/frontend/css/slick.css">
    <link rel="stylesheet" href="/frontend/css/jquery.formstyler.css">
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/media.css">
</head>

<body>
    @include("layouts.header")

    @yield("content")

    @include("layouts.footer")

    <div id="modal">
        <form action="/form" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="text" name="phone" placeholder="Ваш телефон" required>
            <input type="submit" value="Отправить">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/frontend/js/jquery.fancybox.min.js"></script>
    <script src="/frontend/js/slick.min.js"></script>
    <script src="/frontend/js/jquery.formstyler.min.js"></script>
    <script src="/frontend/js/main.js"></script>
</body>

</html>
