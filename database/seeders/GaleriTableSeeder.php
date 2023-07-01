<?php

namespace Database\Seeders;

use App\Models\Galeri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GaleriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galeri::create([
            'foto_url' => "https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg",
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Galeri::create([
            'foto_url' => "https://i0.wp.com/www.datiak.com/wp-content/uploads/2022/10/tempat-wisata-di-ntb-12-mengagumkan-yang-wajib-diku.jpg",
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Galeri::create([
            'foto_url' => "https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg",
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
        Galeri::create([
            'foto_url' => "https://i0.wp.com/www.datiak.com/wp-content/uploads/2022/10/tempat-wisata-di-ntb-12-mengagumkan-yang-wajib-diku.jpg",
            'deskripsi' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus."
        ]);
    }
}
