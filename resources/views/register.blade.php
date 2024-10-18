@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1 class="text-3xl mb-4">Register</h1>
    <form action="/contact" method="get" class="space-y-4">
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full p-2 border border-gray-300 rounded">
        </div>

        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full p-2 border border-gray-300 rounded">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Register</button>
    </form>
@endsection
