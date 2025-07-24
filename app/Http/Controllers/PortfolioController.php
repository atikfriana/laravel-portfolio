<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Fetch portfolio data from the database
        $portfolio = Portfolio::all(); // Or use other queries as needed
        
        // Pass the portfolio data to the view
        return view('portfolio.index', compact('portfolio')); 
    }

    public function create()
    {
        // Menampilkan form untuk membuat portfolio baru
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        // Validasi dan simpan data portfolio baru
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048', // Memastikan file yang diupload adalah gambar
        ]);

        // Cek apakah ada file gambar yang diupload
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('images', 'public') : null;

        // Menyimpan data portfolio baru ke database
        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirect kembali ke daftar portfolio dengan pesan sukses
        return redirect()->route('portfolio.index')->with('success', 'Portfolio berhasil ditambahkan!');
    }

    public function edit($id)
    {
        // Mencari portfolio berdasarkan ID, jika tidak ditemukan akan error 404
        $portfolio = Portfolio::findOrFail($id);

        // Menampilkan form edit untuk portfolio tertentu
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id)
    {
        // Mencari portfolio yang akan diperbarui
        $portfolio = Portfolio::findOrFail($id);

        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        // Simpan gambar baru jika ada
        $imagePath = $portfolio->image; // Menyimpan gambar lama jika tidak ada gambar baru
        if ($request->hasFile('image')) {
            // Menyimpan gambar baru jika diupload
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Memperbarui data portfolio
        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirect kembali ke daftar portfolio dengan pesan sukses
        return redirect()->route('portfolio.index')->with('success', 'Portfolio berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Mencari portfolio berdasarkan ID, jika tidak ditemukan akan error 404
        $portfolio = Portfolio::findOrFail($id);

        // Menghapus data portfolio
        $portfolio->delete();

        // Redirect kembali ke daftar portfolio dengan pesan sukses
        return redirect()->route('portfolio.index')->with('success', 'Portfolio berhasil dihapus!');
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.show', compact('portfolio'));
    }
}
