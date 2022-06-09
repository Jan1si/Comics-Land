<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
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
</div>


</body>
</html>
