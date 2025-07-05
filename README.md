Tentu dong Tika! 😎 Ini dia versi **README lengkap** yang udah cakep banget buat dipajang di GitHub kamu. Formatnya udah pakai struktur profesional, cocok untuk portofolio kuliah, showcase Framer, atau dilampirkan saat ngelamar magang 🧠💼

---

````markdown
# 🎨 Laravel Portfolio Web App – Final Project Web Framework

> Dibuat sebagai Tugas Akhir Mata Kuliah **Web Framework** – Semester 3  
> Dosen Pengampu: **Ibu Salnan**  
> Mahasiswa: *Atika Arifiana*

Aplikasi ini adalah sistem manajemen portofolio pribadi berbasis web yang dibangun dengan **Laravel**, **Blade Template**, dan **TailwindCSS**.  
Website ini memiliki 2 sisi: tampilan publik dan tampilan admin (dengan autentikasi), di mana admin bisa mengelola semua konten secara CRUD.

---

## 📦 Fitur Aplikasi

- 🔐 **Login Admin** – Sistem autentikasi halaman admin
- 🎓 **CRUD Pendidikan** – Tambah, ubah, hapus data pendidikan
- 💼 **CRUD Portofolio** – Kelola data portofolio
- 🛠️ **CRUD Tools** – Tambahkan tools/skills
- 🧭 **Navigasi Publik Lengkap** – Halaman landing, kontak, portofolio, tools
- 🖥️ **Dashboard Admin Terpisah** – Layout khusus admin
- 🎨 **Desain Responsif** – Menggunakan TailwindCSS
- 🔧 **Routing Dinamis** – Laravel Web Routes
- 🛠️ **Blade Template** – Struktur halaman yang reusable & rapi

---

## 🗂️ Struktur Folder Views

```bash
resources/views/
├── admin/             # Halaman utama admin
├── auth/              # Halaman login
├── layouts/           # Layout sidebar admin
├── partial/           # Komponen (navbar, footer, kontak, tools, dsb)
├── pendidikan/        # View pendidikan CRUD
├── portofolio/        # View portofolio CRUD
├── dashboard.blade.php
├── index.blade.php    # Landing page publik
└── welcome.blade.php
````

---

## 🖼️ UI Preview

| Halaman Utama                                                                                     | Pendidikan                                                                                                    | Tools                                                                                               |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| ![Home](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/home.png) | ![Pendidikan](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/pendidikan.png) | ![Tools](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/tools.png) |

| Portofolio                                                                                                    | Kontak                                                                                                | Login                                                                                               |
| ------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------- |
| ![Portofolio](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/portofolio.png) | ![Kontak](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/kontak.png) | ![Login](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/login.png) |

| Daftar Admin                                                                                                     | Daftar Portofolio                                                                                                          | Daftar Pendidikan                                                                                                          |
| ---------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------------- |
| ![Daftar Admin](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/daftaradmin.png) | ![Daftar Portofolio](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/daftarportofolio.png) | ![Daftar Pendidikan](https://raw.githubusercontent.com/atikfriana/laravel-portfolio/main/screenshots/daftarpendidikan.png) |

---

## 🚀 Cara Menjalankan Proyek

> Kamu bisa jalankan proyek ini secara lokal menggunakan XAMPP + Composer

### 🔧 Setup Localhost

1. **Clone repositori**

   ```bash
   git clone https://github.com/atikfriana/laravel-portfolio.git
   cd laravel-portfolio
   ```

2. **Install dependency Laravel & Tailwind**

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Copy dan konfigurasi file environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Set database di `.env`**
   Ganti bagian:

   ```
   DB_DATABASE=laravel_portfolio
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Jalankan migrasi database**

   ```bash
   php artisan migrate
   ```

6. **Jalankan server lokal**

   ```bash
   php artisan serve
   ```

---

## ⚠️ Catatan Tambahan

* Jika database tidak tersedia, kamu bisa membuat ulang dari `php artisan make:migration` dan `php artisan migrate`
* Semua file view dibuat menggunakan Blade template
* TailwindCSS telah dikonfigurasi manual dengan `vite.config.js`

---

## ✨ Credits

* Framework: [Laravel](https://laravel.com/)
* Styling: [TailwindCSS](https://tailwindcss.com/)
* Icon: [Heroicons](https://heroicons.com/)
* Developer: [Atika Arifiana](https://github.com/atikfriana)

---

## 📄 Lisensi

MIT License © 2025

---

````

---
