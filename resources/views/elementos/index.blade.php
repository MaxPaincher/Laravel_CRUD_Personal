@extends('layouts.app')

@section('body')
    <div class="">
        <div class="text-center py-5 flex justify-center gap-5">
            <a class="px-5 bg-slate-500 rounded-md text-white" href="{{ route('login') }}">Salir</a>
            <a class="px-5 bg-slate-500 rounded-md text-white" href="{{ route('home.create') }}">Crear nuevo post</a>
        </div>

        <div>
            <div class="grid grid-cols-3 gap-5 p-5">
                @foreach ($posts as $post)
                    <a href="/home/show/{{ $post->id }}">
                        <x-bladewind::card class="cursor-pointer hover:shadow-gray-300">
                            <x-bladewind::avatar
                                image="{{ asset('storage/images/sjwkoxEC4oxmJ6vOW02HBKsnttw3soCGdtUAZ1Rt.jpg') }}"
                                size="omg" />
                            <span class="text-center ...">{{ $post->title }}</span>
                        </x-bladewind::card>
                    </a>
                @endforeach
            </div>
        </div>
    @endsection
