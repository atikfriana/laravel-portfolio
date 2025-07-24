@extends('layouts.navbaradmin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Daftar Pendidikan</h1>

    <!-- Tombol Tambah Pendidikan -->
    <a href="{{ route('pendidikan.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Tambah Pendidikan</a>

    <div class="mt-6">
        <!-- Cek jika tidak ada data pendidikan -->
        @if ($pendidikan->isEmpty())
            <p class="text-gray-600">Belum ada data pendidikan.</p>
        @else
            <!-- Iterasi untuk menampilkan daftar pendidikan -->
            @foreach($pendidikan as $item)
                <div class="mb-4 p-4 border rounded-md">
                    <h3 class="font-semibold text-lg">{{ $item->nama_institusi }}</h3>
                    <p>Program Studi: {{ $item->program_studi }}</p>
                    <p>Tahun: {{ $item->tahun_mulai }} - {{ $item->tahun_selesai ?? 'Sekarang' }}</p>
                    
                    <!-- Tampilkan Gambar jika ada -->
                    @if($item->gambar)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar {{ $item->nama_institusi }}" 
                                 class="w-32 h-32 object-cover rounded-md">
                        </div>
                    @endif

                    <!-- Tombol Edit dan Hapus -->
                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ route('pendidikan.edit', $item->id) }}" 
                           class="bg-blue-500 text-white px-4 py-2 rounded-md">
                            Edit
                        </a>
                        <form action="{{ route('pendidikan.destroy', $item->id) }}" method="POST" 
                              onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
