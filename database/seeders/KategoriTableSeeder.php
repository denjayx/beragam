<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'nama' => 'Rumah Adat'
        ]);
        Kategori::create([
            'nama' => 'Pakaian Adat'
        ]);
        Kategori::create([
            'nama' => 'Makanan Khas'
        ]);
        Kategori::create([
            'nama' => 'Tarian Adat'
        ]);
    }
}
