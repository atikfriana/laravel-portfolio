@extends('layouts.navbaradmin')

@section('content')
<!-- Konten portofolio -->
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Daftar Portofolio</h1>

    <!-- Tombol Tambah Portofolio -->
    <a href="{{ route('portfolio.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md">Tambah Portofolio</a>

    <div class="mt-6">
        @if($portfolio->isEmpty())
            <p class="text-gray-600">Belum ada data portofolio.</p>
        @else
            @foreach($portfolio as $item)
                <div class="mb-4 p-4 border rounded-md shadow-sm">
                    <h3 class="font-semibold text-lg mb-2">{{ $item->title }}</h3>
                    <p class="text-gray-700 mb-2">{{ $item->description }}</p>

                    @if($item->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-32 h-32 object-cover rounded-md">
                        </div>
                    @endif

                    <div class="flex items-center gap-4 mt-4">
                        <a href="{{ route('portfolio.edit', $item->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit</a>
                        <form action="{{ route('portfolio.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
