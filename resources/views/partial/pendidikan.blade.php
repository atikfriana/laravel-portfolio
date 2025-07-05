<div class="pendidikan">
    <h2>Pendidikan</h2>
    <ul>
        @foreach($pendidikan as $pendidikanItem)
            <li>
                <h5>{{ $pendidikanItem->program_studi }}</h5>
                <p>{{ $pendidikanItem->nama_institusi }} - {{ $pendidikanItem->tahun_mulai }} - {{ $pendidikanItem->tahun_selesai }}</p>
                <!-- Jika ada gambar, tampilkan gambar -->
                @if($pendidikanItem->gambar)
                    <img src="{{ asset('storage/' . $pendidikanItem->gambar) }}" alt="Gambar Pendidikan" class="img-fluid">
                @endif
            </li>
        @endforeach
    </ul>
</div>
