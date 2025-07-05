<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Model User digunakan untuk data admin
use App\Models\Admin; // Model Admin
use App\Models\Portfolio; // Model Portfolio

class AdminController extends Controller
{
    /**
     * Menampilkan daftar admin.
     */
    public function index()
    {
        // Ambil semua admin
        $admins = User::all(); // Jika ingin membedakan admin dengan user biasa, tambahkan filter is_admin
        return view('admin.index', compact('admins'));
    }

    /**
     * Menampilkan halaman form tambah admin.
     */
    public function create()
    {
        return view('admin.create'); // View form untuk tambah admin
    }

    /**
     * Menyimpan admin baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Email tidak boleh duplikat
            'password' => 'required|string|min:8', // Password minimal 8 karakter
        ]);

        // Simpan admin baru ke database
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan!');
    }

    /**
     * Menampilkan halaman edit admin.
     */
    public function edit($id)
    {
        // Cari admin berdasarkan ID
        $admin = User::findOrFail($id);
        return view('admin.edit', compact('admin')); // Kirim data admin ke view
    }

    /**
     * Memperbarui data admin.
     */
    public function update(Request $request, $id)
    {
        // Cari admin berdasarkan ID
        $admin = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id, // Email unik kecuali untuk admin ini
            'password' => 'nullable|string|min:8', // Password opsional
        ]);

        // Update data admin
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $admin->password, // Jika password kosong, gunakan yang lama
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin')->with('success', 'Admin berhasil diperbarui!');
    }

    /**
     * Menghapus admin dari database.
     */
    public function destroy($id)
    {
        // Cari admin berdasarkan ID
        $admin = User::findOrFail($id);

        // Hapus admin
        $admin->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin')->with('success', 'Admin berhasil dihapus!');
    }
}
