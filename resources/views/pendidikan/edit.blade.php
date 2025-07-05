@extends('layouts.navbaradmin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Edit Pendidikan</h1>

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

    <!-- Form edit pendidikan -->
    <form action="{{ route('pendidikan.update', $pendidikan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama_institusi" class="block text-sm font-medium">Nama Institusi:</label>
            <input type="text" id="nama_institusi" name="nama_institusi" value="{{ $pendidikan->nama_institusi }}" 
                   class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="program_studi" class="block text-sm font-medium">Program Studi:</label>
            <input type="text" id="program_studi" name="program_studi" value="{{ $pendidikan->program_studi }}" 
                   class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="tahun_mulai" class="block text-sm font-medium">Tahun Mulai:</label>
            <input type="number" id="tahun_mulai" name="tahun_mulai" value="{{ $pendidikan->tahun_mulai }}" 
                   class="w-full px-4 py-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="tahun_selesai" class="block text-sm font-medium">Tahun Selesai:</label>
            <input type="number" id="tahun_selesai" name="tahun_selesai" value="{{ $pendidikan->tahun_selesai }}" 
                   class="w-full px-4 py-2 border rounded-md">
        </div>

        <div class="mb-4">
            <label for="gambar" class="block text-sm font-medium">Gambar:</label>
            @if($pendidikan->gambar)
                <img src="{{ asset('storage/' . $pendidikan->gambar) }}" alt="Gambar {{ $pendidikan->nama_institusi }}" 
                     class="w-32 h-32 object-cover rounded-md mb-2">
            @endif
            <input type="file" id="gambar" name="gambar" class="w-full px-4 py-2 border rounded-md">
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection
