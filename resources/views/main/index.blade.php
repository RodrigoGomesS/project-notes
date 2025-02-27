@extends('main.layouts.main_layout')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full">
                @if (count($notes) == 0)
                    <div class="flex justify-center mt-5">
                        <div class="text-center">
                            <p class="text-4xl mb-5 text-gray-400 opacity-50">You have no notes available!</p>
                            <a href="{{ route('create') }}"
                                class="bg-gray-500 text-white text-lg py-3 px-5 rounded-lg inline-flex items-center">
                                <i class="fa-regular fa-pen-to-square mr-3"></i>Create Your First Note
                            </a>
                        </div>
                    </div>
                @else
                    <div class="flex justify-end mb-3">
                        <a href="{{ route('create') }}"
                            class="bg-gray-500 text-white px-3 py-2 rounded-md inline-flex items-center">
                            <i class="fa-regular fa-pen-to-square mr-2"></i>New Note
                        </a>
                    </div>

                    @foreach ($notes as $note)
                        @include('main.layouts.note')
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
