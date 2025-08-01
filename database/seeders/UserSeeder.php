<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Atika Fitria Arifiana',  // Menambahkan nama pengguna
            'email' => 'atikafit.arifiana@gmail.com',
            'password' => Hash::make('123456'),  // Menggunakan Hash untuk mengamankan password
        ]);
    }
}
