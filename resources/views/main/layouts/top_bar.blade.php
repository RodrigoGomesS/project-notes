<header class="bg-white dark:bg-gray-900 p-6 shadow-md transition-colors duration-300">
    <div class="max-w-7xl mx-auto flex justify-between items-center space-x-6">
        <div class="flex-shrink-0">
            <a href="{{ route('home') }}">
                <img class="h-12 w-auto" src="assets/images/logo.png" alt="Notes logo">
            </a>
        </div>
        <div class="flex-1 text-center text-gray-700 dark:text-gray-300 text-lg">
            A simple <span class="text-yellow-500">Laravel</span> project!
        </div>
        <div class="flex items-center space-x-6">
            <div class="flex items-center text-gray-700 dark:text-gray-300 space-x-3">
                <span class="flex items-center"><i class="fa-solid fa-user-circle fa-lg mr-2"></i>{{ session('user.username') }}</span>
                <a href="{{ route('logout') }}" class="border border-gray-500 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                    Logout<i class="fa-solid fa-arrow-right-from-bracket ml-2"></i>
                </a>
            </div>
            <div class="flex items-center space-x-4">
                <span id="themeText" class="text-gray-700 dark:text-gray-300 font-medium">Modo Claro</span>
                <button id="themeToggle" class="relative w-16 h-8 bg-gray-300 dark:bg-gray-700 rounded-full flex items-center transition-all duration-300">
                    <div id="toggleCircle" class="absolute left-1 w-6 h-6 bg-white dark:bg-gray-200 rounded-full shadow-md transition-all duration-300"></div>
                </button>
                <i id="themeIcon" class="fas fa-sun text-yellow-400 dark:text-white text-2xl transition-all duration-300"></i>
            </div>
        </div>
    </div>
</header>