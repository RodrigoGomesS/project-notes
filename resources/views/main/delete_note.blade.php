@extends('main.layouts.main_layout')
@section('content')

<div class="container mx-auto mt-10 px-4">
    <div class="flex justify-center">
        <div class="w-full max-w-lg">

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6 text-center">
                <span class="text-6xl mb-5 text-yellow-500 opacity-50">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </span>
                <h4 class="text-blue-500 dark:text-blue-400 mb-3">{{ $note->title }}</h4>
                <p class="text-gray-600 dark:text-gray-300">Are you sure you want to delete this note?</p>
                <div class="mt-5 flex justify-center space-x-4">
                    <a href="{{ route('home') }}" class="bg-red-500 dark:bg-red-600 text-white px-5 py-2 rounded flex items-center">
                        <i class="fa-solid fa-xmark mr-2"></i>No
                    </a>
                    <a href="{{ route('deleteConfirm', ['id' => Crypt::encrypt($note->id)]) }}" class="bg-green-500 dark:bg-green-600 text-white px-5 py-2 rounded flex items-center">
                        <i class="fa-solid fa-trash mr-2"></i>Yes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
