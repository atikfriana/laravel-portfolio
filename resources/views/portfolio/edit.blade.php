@extends('layouts.navbaradmin')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Edit Portofolio</h1>

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
    @if ($portfolio->image)
    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Current Image" class="w-32 h-32 mt-2 rounded">
@endif


    <!-- Form Edit Portofolio -->
    <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block font-bold">Judul</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $portfolio->title }}" required>
        </div>
        <div>
            <label for="description" class="block font-bold mt-3">Deskripsi</label>
            <textarea name="description" id="description" class="form-control" rows="4" required>{{ $portfolio->description }}</textarea>
        </div>
        <div>
            <label for="image" class="block font-bold mt-3">Gambar</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Current Image" class="w-32 h-32 mt-2 rounded">
            @endif
        </div>
        <!-- Tombol Simpan -->
         <br>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            Simpan Perubahan
        </button>
    </form>
</div>
@endsection
