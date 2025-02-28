@extends('main.layouts.main_layout')
@section('content')
    <div class="container mx-auto mt-10 px-4">
        <div class="flex flex-col items-center">

            <!-- Label and cancel button -->
            <div class="w-full mt-6">
                <p class="text-3xl font-semibold text-gray-900 dark:text-gray-100">NEW NOTE</p>
            </div>

            <!-- Form -->
            <form action="{{ route('createSubmit') }}" method="post" class="w-full mt-6">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Note Title</label>
                    <input type="text" name="text_title"
                        class="w-full px-3 py-2 bg-white shadow rounded-lg dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500"
                        value="{{ old('text_title') }}">
                    @error('text_title')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Note Text</label>
                    <textarea name="text_note" rows="5"
                        class="w-full px-3 py-2 bg-white shadow rounded-lg dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-blue-400 dark:focus:ring-blue-500">
                        {{ old('text_note') }}
                    </textarea>
                    @error('text_note')
                        <div class="text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex justify-end space-x-3 mt-6">
                    <a href="{{ route('home') }}"
                        class="bg-red-500 dark:bg-red-600 text-white px-5 py-2 rounded flex items-center">
                        <i class="fa-solid fa-ban mr-2"></i>Cancel
                    </a>
                    <button type="submit"
                        class="bg-green-700 dark:bg-green-800 text-white px-5 py-2 rounded flex items-center">
                        <i class="fa-regular fa-circle-check mr-2"></i>Save
                    </button>
                </div>
            </form>

        </div>
    </div>
@endsection
