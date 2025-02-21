@extends('main.layouts.main_layout')
@section('content')
    <div class="container mx-auto mt-5">
        <div class="flex justify-center">
            <div class="w-full">

                <div class="flex justify-center mt-5">
                    <div class="text-center">
                        <p class="text-4xl mb-5 text-gray-400 opacity-50">You have no notes available!</p>
                        <a href="{{ route('new') }}"
                            class="bg-gray-500 text-white text-lg py-3 px-5 rounded-lg inline-flex items-center">
                            <i class="fa-regular fa-pen-to-square mr-3"></i>Create Your First Note
                        </a>
                    </div>
                </div>

                <hr class="my-5">

                <div class="flex justify-end mb-3">
                    <a href="{{ route('new') }}"
                        class="bg-gray-500 text-white px-3 py-2 rounded-md inline-flex items-center">
                        <i class="fa-regular fa-pen-to-square mr-2"></i>New Note
                    </a>
                </div>

                <div class="grid grid-cols-1">
                    <div class="p-4 bg-white shadow rounded-lg">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="text-blue-500">Note Title</h4>
                                <small class="text-gray-500"><span class="opacity-75 mr-2">Created
                                        at:</span><strong>00/00/0000 00:00:00</strong></small>
                            </div>
                            <div class="flex space-x-2">
                                <a href="#" class="border border-gray-500 text-gray-500 px-2 py-1 rounded"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                <a href="#" class="border border-red-500 text-red-500 px-2 py-1 rounded"><i
                                        class="fa-regular fa-trash-can"></i></a>
                            </div>
                        </div>
                        <hr class="my-2">
                        <p class="text-gray-500">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia
                            temporibus necessitatibus nesciunt quam repellat porro commodi autem veniam doloribus nostrum
                            magni rerum, libero ullam maxime praesentium cum velit. Recusandae, aspernatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
