<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/js/faq.js') }}" defer></script>
    <script src="{{ asset('assets/js/modals.js') }}" defer></script>
    <script src="{{ asset('assets/js/error.js') }}" defer></script>
    <title>@yield('title', config('app.name'))</title>
</head>
<body>
@include('includes.message')
@include('modals.signin')
@include('modals.signup')
@yield('content')
@include('includes.footer')
</body>
</html>
