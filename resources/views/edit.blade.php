@extends('components.template')

@section('title', 'Create User Form')

@section('content')
    <p>Ini Form Edit</p>

    <form action="{{ route("update-user" $user->id)}}" method="post">
        @csrf
        @method("put")
        <div>
            <label for="nama">Nama</label>
            <input class="py-1 px-3 border rounded-xl" type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input class="py-1 px-3 border rounded-xl" type="email" name="email" id="email" value="{{ $user->email }}"">        
        </div>
        <div>
            <label for="phone">Nomor Telepon</label>
            <input class="py-1 px-3 border rounded-xl" type="number" name="phone" id="phone" value="{{ $user->phone }}"">        
        </div>
        <button class="px-3 py-2 rounded-lg text-white bg-green-500 hover:bg-green-700" type="submit">Kirim</button>
    </form>
@endsection