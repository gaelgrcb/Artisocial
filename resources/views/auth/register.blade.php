@extends('layouts.app')

@section('titulo')
Sign Up
@endsection

@section('contenido')
<div class="flex items-center justify-center">
    <form action="/register" method="post" class=" p-7 dark:bg-gray-800 dark:border-gray-900 rounded-lg shadow-md w-full max-w-sm">
        @csrf
        <div>
            <label for="username">User</label>
            <input type="text" id="username" name="username" placeholder="Your Username"
            class="dark:bg-gray-300 dark:border-gray-400 border rounded-lg w-full p-2 mb-3">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your Email"
            class="dark:bg-gray-300 dark:border-gray-400 border rounded-lg w-full p-2 mb-3">
        </div>

        <div>
            <label for="text">Password</label>
            <input type="text" id="password" name="password" placeholder="Your Password"
            class="dark:bg-gray-300 dark:border-gray-400 border rounded-lg w-full p-2 mb-3">
        </div>

        <div>
            <label for="text">Repeat your password</label>
            <input type="text" id="password" name="password" placeholder="Repeat Your Password"
            class="dark:bg-gray-300 dark:border-gray-400 border rounded-lg w-full p-2 mb-3">
        </div>
        <button type="submit" class="mt-4  bg-blue-500 text-white py-2 px-4 rounded-lg w-full">Sign Up</button>
    </form>
</div>
@endsection