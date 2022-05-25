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
            'password' => Hash::make('TestingNgab')
        ]);

        Registration::create([
            'Nama' => 'Atras Shalhan',
            'Email' => 'atras.shalhan@student.umn.ac.id',
            'NIM' => '00000050597',
            'Jurusan' => 'Komunikasi Strategis',
            'nomorWA' => '081287318166',
            'ID_Line' => 'atrasshalhan',
            'password' => Hash::make('testing12345')
        ]);

        Aspiration::create([
            'Resi' =>'IF45651AB23',
            'Kategori' => 'Akademik',
            'User_id' => 1,
            'Isi' => 'Kenapa ga boleh demo di UMN?',
            'Status' => 'Finished',
            'Solusi' => "Karena..."
        ]);

        Aspiration::create([
            'Resi' =>'SC50597SHFW',
            'User_id' => 1,
            'Kategori' => 'Non-Akademik',
            'Isi' => 'Testing yuuuhuuuu',
            'Status' => 'Finished',
            'Solusi' => "Kepoo yaaaa !!????"
        ]);

        Aspiration::create([
            'Resi' =>'SC50597K2H3',
            'User_id' => 1,
            'Kategori' => 'Fasilitas',
            'Isi' => 'Testing lagi gaann',
            'Status' => 'Pending',
            'Solusi' => null
        ]);
    }
}
