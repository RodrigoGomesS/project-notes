<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOTES</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    @vite(['resources/css/app.css'])
</head>

<body class="bg-white dark:bg-gray-950 transition-colors duration-300">

    @session('user')
        @include('main.layouts.top_bar')
    @endsession

    @yield('content')

    @vite(['resources/js/themeToggle.js'])

</body>

</html>
