@extends('layouts.navbaradmin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Tambah Portofolio</h1>

    <!-- Tampilkan error validasi jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Tambah Portofolio -->
    <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Judul -->
        <div class="form-group mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul portofolio" required>
        </div>

        <!-- Input Deskripsi -->
        <div class="form-group mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Tambahkan deskripsi portofolio" required></textarea>
        </div>

        <!-- Input Gambar -->
        <div class="form-group mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <!-- Tombol Submit -->
        <div class="text-end">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
        </div>
    </form>
</div>
@endsection
