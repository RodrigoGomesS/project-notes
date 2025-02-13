@extends('main.layouts.main_layout')

@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900 dark:text-gray-200">Sign in to your account</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg">
                <form class="space-y-6" action="/loginSubmit" method="post" novalidate>
                    @csrf
                    <div>
                        <label for="text_username"
                            class="block text-sm/6 font-medium text-gray-900 dark:text-gray-200">Username</label>
                        <div class="mt-2">
                            <input type="email" name="text_username" id="email" autocomplete="email"
                                value="{{ old('text_username') }}" required
                                class="block w-full rounded-md bg-white dark:bg-gray-700 px-3 py-1.5 text-base text-gray-900 dark:text-gray-200 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            {{-- show error --}}
                            @error('text_username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="text_password"
                            class="block text-sm/6 font-medium text-gray-900 dark:text-gray-200">Password</label>
                        <div class="mt-2">
                            <input type="password" name="text_password" id="password" autocomplete="current-password"
                                value="{{ old('text_password') }}" required
                                class="block w-full rounded-md bg-white dark:bg-gray-700 px-3 py-1.5 text-base text-gray-900 dark:text-gray-200 outline-1 -outline-offset-1 outline-gray-300 dark:outline-gray-600 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            {{-- show error --}}
                            @error('text_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">LOGIN</button>
                    </div>
                </form>
                {{-- invalid login --}}
                @if (session('loginError'))
                    <div class="alert alert-danger text-center">
                        {{ session('loginError') }}
                    </div>
                @endif

                <div class="text-center text-gray-600 dark:text-gray-400 mt-3">
                    <small>&copy; <?= date('Y') ?> Notes</small>
                </div>
            </div>
        </div>
    </div>
@endsection
