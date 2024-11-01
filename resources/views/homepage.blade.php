@extends('components.template')

@section('title', 'homepage')

@section('content')
    <h1>Ini Homepage</h1>
    <p>Selamat datang di Contact App</p>

    <a class="px-3 py-2 rounded-lg bg-green-500 my-5" href="{{route('create-user')}}">Create User</a>
    <div>
        <table border="1" class="border">
            <thead class="border">
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact["name"] }}</td>
                        <td>{{ $contact["email"] }}</td>
                        <td>{{ $contact["phone"] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
