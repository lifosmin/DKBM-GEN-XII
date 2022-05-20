<?php

namespace Database\Seeders;

use App\Models\Aspiration;
use App\Models\Registration;
use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'Email' => 'admin@umn.ac.id',
            'password' => Hash::make('DKBMUMN2022')
        ]);

        Registration::create([
            'Nama' => 'Vallencius Gavriel Alfredo Siswanto',
            'Email' => 'vallencius.siswanto@student.umn.ac.id',
            'NIM' => '00000045651',
            'Jurusan' => 'Informatika',
            'nomorWA' => '088233632633',
            'ID_Line' => 'valls1901',
            'password' => Hash::make('19012003')
        ]);

        Aspiration::create([
            'Resi' =>'IF4565101',
            'Kategori' => 'Akademik',
            'User_id' => 1,
            'Isi' => 'Kenapa ga boleh demo di UMN?',
            'Status' => 'Finished',
            'Solusi' => "Karena..."
        ]);

        Aspiration::create([
            'Resi' =>'IF4565102',
            'Kategori' => 'Akademik',
            'User_id' => 1,
            'Isi' => 'Kenapa UMN banyak tugas?',
            'Status' => 'Pending'
        ]);
    }
}
