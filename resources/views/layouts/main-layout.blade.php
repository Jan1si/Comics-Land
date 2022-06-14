<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>@yield('title')</title>
</head>
<body>

<div class="wrapper">
    <header class="header">
        @include('includes.header')
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        @include('includes.footer')
    </footer>
    <script src="{{ asset('scripts/main.js') }}"></script>
</div>


</body>
</html>
