@extends('layouts.app')

@section('titulo')
    Registrate en Artisocial
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5"> 
            <img src="{{ asset('img/registrar.jpg') }}" alt="Imagen Registro">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="/register" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        nombre
                    </label>
                    <input id="name"
                            name="name"
                            type="text"
                            placeholder="Tu nombre"
                            class="border p-3 w-full rounded-lg">
                </div>
                @error('name')
                <p class="bg-red-500 text-white font-bold text-center uppercase rounded-md p-2 my-2 text-sm "> {{$message}} </p>
                @enderror
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        usuario
                    </label>
                    <input id="username"
                            name="username"
                            type="text"
                            placeholder="Tu usuario"
                            class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        email
                    </label>
                    <input id="email"
                            name="email"
                            type="text"
                            placeholder="Tu email"
                            class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        contraseña
                    </label>
                    <input id="password"
                            name="password"
                            type="text"
                            placeholder="Tu contraseña"
                            class="border p-3 w-full rounded-lg">
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        repetir contraseña
                    </label>
                    <input id="password_confirmation"
                            name="password_confirmation"
                            type="text"
                            placeholder="Repite tu contraseña"
                            class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit"
                        value="Crear Cuenta"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection