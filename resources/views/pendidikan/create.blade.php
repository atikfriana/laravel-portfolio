@extends('layouts.navbaradmin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Tambah Pendidikan</h1>

    <form action="{{ route('pendidikan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf <!-- Token keamanan wajib -->

        <div class="mb-4">
            <label for="nama_institusi" class="block text-sm font-medium text-gray-700">Nama Institusi</label>
            <input type="text" name="nama_institusi" id="nama_institusi" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="program_studi" class="block text-sm font-medium text-gray-700">Program Studi</label>
            <input type="text" name="program_studi" id="program_studi" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="tahun_mulai" class="block text-sm font-medium text-gray-700">Tahun Mulai</label>
            <input type="number" name="tahun_mulai" id="tahun_mulai" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>

        <div class="mb-4">
            <label for="tahun_selesai" class="block text-sm font-medium text-gray-700">Tahun Selesai</label>
            <input type="number" name="tahun_selesai" id="tahun_selesai" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <!-- Tambahkan Input File -->
        <div class="mb-4">
            <label for="gambar" class="block text-sm font-medium text-gray-700">Upload Gambar</label>
            <input type="file" name="gambar" id="gambar" 
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Simpan</button>
    </form>
</div>
@endsection
