@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl mb-4">Contact Page</h1>
    @php
        $contacts = [
            ['name' => 'John Doe', 'role' => 'Mahasiswa', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'role' => 'Karyawan', 'email' => 'jane@example.com'],
            ['name' => 'Alice Johnson', 'role' => 'Mahasiswa', 'email' => 'alice@example.com'],
        ];
    @endphp

    <table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-300">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $index => $contact)
                <tr class="bg-white">
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $contact['name'] }}</td>
                    <td class="border px-4 py-2">{{ $contact['role'] }}</td>
                    <td class="border px-4 py-2">{{ $contact['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
