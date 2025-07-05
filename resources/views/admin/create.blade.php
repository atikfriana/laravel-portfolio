
@extends('layouts.navbaradmin')

@section('content')
    <h1>Tambah Admin</h1><br>

    <!-- Tampilkan error validasi jika ada -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 px-4 py-2 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form tambah admin -->
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf <!-- Token CSRF wajib untuk keamanan -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium">Nama:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium">Password:</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">
            Tambahkan Admin
        </button>
    </form>
@endsection
