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
    <header class="bg-white dark:bg-gray-900 p-4 shadow-md transition-colors duration-300">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <div class="flex-shrink-0">
                <img class="h-10 w-auto" src="assets/images/logo.png" alt="Notes logo">
            </div>

            <!-- Botão Toggle -->
            <div class="flex items-center space-x-3">
                <span id="themeText" class="text-gray-700 dark:text-gray-300 font-medium">Modo Claro</span>

                <button id="themeToggle" class="relative w-14 h-7 bg-gray-300 dark:bg-gray-700 rounded-full flex items-center transition-all duration-300">
                    <div id="toggleCircle" class="absolute left-1 w-5 h-5 bg-white dark:bg-gray-200 rounded-full shadow-md transition-all duration-300"></div>
                </button>

                <i id="themeIcon" class="fas fa-sun text-yellow-400 dark:text-white text-xl transition-all duration-300"></i>
            </div>
        </div>
    </header>

    @yield('content')

    @vite(['resources/js/themeToggle.js'])

</body>

</html>
