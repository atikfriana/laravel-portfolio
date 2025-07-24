
@extends('layouts.navbaradmin')

@section('content')
    <h1>Edit Admin</h1><br>

    <form action="{{ route('admin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="name" id="name" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $admin->name }}" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full border-gray-300 rounded-md shadow-sm" value="{{ $admin->email }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password (kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" id="password" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            <i class="fas fa-save"></i> Simpan Perubahan
        </button>
    </form>
@endsection
