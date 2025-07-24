<!-- resources/views/admin/index.blade.php -->

@extends('layouts.navbaradmin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Admin</h1>

    <table class="w-full table-auto">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 text-left">Nama</th>
                <th class="px-4 py-2 text-left">Email</th>
                <th class="px-4 py-2 text-left">Password</th>
                <th class="px-4 py-2 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
            <tr>
                <td class="border px-4 py-2">{{ $admin->name }}</td>
                <td class="border px-4 py-2">{{ $admin->email }}</td>
                <td class="border px-4 py-2">********</td> <!-- Jangan tampilkan password asli -->
                <td class="border px-4 py-2">
                    <a href="{{ route('admin.edit', $admin->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded-md">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <br>
                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus admin ini?')">
                        @csrf
                        @method('DELETE')
                        <br>
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>
        <!-- Tombol Tambah Admin -->
        <a href="{{ route('admin.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md mb-4">
        <i class="fas fa-plus"></i> Tambah Admin
    </a>
@endsection
