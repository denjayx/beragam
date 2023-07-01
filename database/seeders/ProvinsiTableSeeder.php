<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provinsi::create([
            'nama' => 'Lampung',
            'foto_url' => "https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg",
            'deskripsi' => "Lampung Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Provinsi::create([
            'nama' => 'Nusa Tenggara Barat',
            'foto_url' => "https://i0.wp.com/www.datiak.com/wp-content/uploads/2022/10/tempat-wisata-di-ntb-12-mengagumkan-yang-wajib-diku.jpg",
            'deskripsi' => "NTB Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Provinsi::create([
            'nama' => 'Sulawesi Tengah',
            'foto_url' => "https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg",
            'deskripsi' => "Sulteng Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Provinsi::create([
            'nama' => 'Kalimantan Tengah',
            'foto_url' => "https://i0.wp.com/www.datiak.com/wp-content/uploads/2022/10/tempat-wisata-di-ntb-12-mengagumkan-yang-wajib-diku.jpg",
            'deskripsi' => "Kalteng Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
    }
}
