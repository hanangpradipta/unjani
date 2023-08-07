<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akuns')->insert([
            'name' => 'admin', // Nama pengguna
            'username' => 'admin', // Email yang digunakan untuk login
            'password' => Hash::make('12345'), // Password yang digunakan untuk login (di-hash)
        ]);
    }
}
