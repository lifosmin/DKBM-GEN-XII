<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Registration::create([
            'Nama' => 'Admin',
            'Email' => 'admin@umn.ac.id',
            'NIM' => '00000011111',
            'Jurusan' => 'Informatika',
            'nomorWA' => '0987654321',
            'ID Line' => 'DKBMUMN',
            'password' => Hash::make('DKBMUMN2022')
        ]);
    }
}
