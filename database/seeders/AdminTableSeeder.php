<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'nama' => 'Deni Wijaya',
            'email' => 'deni@gmail.com',
            'password' => \Hash::make('deni123'),
            'no_hp' => '082276857564'
        ]);
    }
}
