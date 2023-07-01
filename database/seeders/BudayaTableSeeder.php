<?php

namespace Database\Seeders;

use App\Models\Budaya;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BudayaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Budaya::create([
            'nama' => 'Nuwo Sesat',
            'prov_id' => 1,
            'kat_id' => 1,
            'foto_url' => 'https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus.',
        ]);
        Budaya::create([
            'nama' => 'Kain Tapis',
            'prov_id' => 1,
            'kat_id' => 2,
            'foto_url' => 'https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus.',
        ]);
        Budaya::create([
            'nama' => 'Seruit',
            'prov_id' => 1,
            'kat_id' => 3,
            'foto_url' => 'https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus.',
        ]);
        Budaya::create([
            'nama' => 'Sigeh Pengunten',
            'prov_id' => 1,
            'kat_id' => 4,
            'foto_url' => 'https://kompaspedia.kompas.id/wp-content/uploads/2021/07/20150323BAH17.jpg',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, culpa consectetur dolore optio distinctio nam tempora sapiente. Nemo esse deserunt tempora rerum cupiditate accusantium tempore vitae, sunt dolorum est doloribus.',
        ]);
    }
}
