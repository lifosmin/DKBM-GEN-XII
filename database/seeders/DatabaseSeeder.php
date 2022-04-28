<?php

namespace Database\Seeders;

use App\Models\Registration;
use Illuminate\Database\Seeder;

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
            'NIM' => 00000011111,
            'Password' => bcrypt("testing12345"),
            'Jurusan' => 'Informatika',
            'nomorWA' => '0987654321',
            'ID_Line' => 'DKBMUMN'
        ]);
    }
}
