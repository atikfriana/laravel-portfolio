<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Add this for Storage handling

class PendidikanController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel 'pendidikan'
        $pendidikan = Pendidikan::all();
    
        return view('pendidikan.index', compact('pendidikan'));
    }
    
    public function create()
    {
        // Menampilkan form tambah pendidikan
        return view('pendidikan.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan form
        $validated = $request->validate([
            'nama_institusi' => 'required',
            'program_studi' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);
    
        // Jika ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('pendidikan', 'public'); // Simpan di storage/public/pendidikan
            $validated['gambar'] = $gambarPath; // Tambahkan path gambar ke data validasi
        }
    
        // Simpan data ke database
        Pendidikan::create($validated);
    
        // Redirect ke halaman daftar pendidikan
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil ditambahkan.');
    }
    
    public function edit($id)
    {
        // Cari data pendidikan berdasarkan ID
        $pendidikan = Pendidikan::findOrFail($id);

        // Kirim data ke view edit
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::findOrFail($id); // Cari data berdasarkan ID
        if ($pendidikan->gambar) {
            Storage::delete($pendidikan->gambar); // Hapus file gambar jika ada
        }
        $pendidikan->delete(); // Hapus data dari database
    
        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_institusi' => 'required',
            'program_studi' => 'required',
            'tahun_mulai' => 'required|integer',
            'tahun_selesai' => 'nullable|integer',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Cari data berdasarkan ID
        $pendidikan = Pendidikan::findOrFail($id);

        // Perbarui data
        $pendidikan->nama_institusi = $validated['nama_institusi'];
        $pendidikan->program_studi = $validated['program_studi'];
        $pendidikan->tahun_mulai = $validated['tahun_mulai'];
        $pendidikan->tahun_selesai = $validated['tahun_selesai'];

        // Jika ada file gambar baru
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($pendidikan->gambar) {
                Storage::delete($pendidikan->gambar);
            }
            // Simpan gambar baru
            $pendidikan->gambar = $request->file('gambar')->store('pendidikan');
        }

        $pendidikan->save(); // Simpan perubahan

        return redirect()->route('pendidikan.index')->with('success', 'Data pendidikan berhasil diperbarui.');
    }
}
