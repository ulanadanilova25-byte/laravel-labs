<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Учебный сайт')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <div class="container header-inner">
            <a class="logo" href="{{ route('home') }}">Мой сайт</a>

            <nav class="nav">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('about') }}">О нас</a>
                <a href="{{ route('contacts') }}">Контакты</a>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <p>Данилова Ульяна Сергеевна</p>
            <p>Группа: 251-321</p>
        </div>
    </footer>
</body>
</html>
