@extends("layouts.app")


@section("title", "laravel" )

@push("css")
    <style>
        body {
            background-color: rgb(136, 74, 74)
        }
    </style>
@endpush

@section("content")

    <div class="max-w-4xl mx-auto px-4">

        {{-- <h1>Bienvenido a la pagina principal</h1>< --}}


        <x-alert type="danger" class="mb-4">
            <x-slot name="title" >
                Titulo de la alerta
            </x-slot>

            <x-slot name="contenido" >
                otra monda
            </x-slot>
            contenido de la alerta
        </x-alert>
    

    </div>



@endSection