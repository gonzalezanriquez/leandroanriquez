<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])


    <title>@yield('title')</title>


</head>

<body>

        @include('nav.superiornav')
        <main class="mt-5 pt-5 ">
            @yield('content')
        </main>


    <script src="sweetalert2.all.min.js"></script>


</body>
</html>
