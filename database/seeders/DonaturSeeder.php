<?php

namespace Database\Seeders;

use App\Models\Donatur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonaturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Donatur::create([
            'user' => '11',
            'nama' => 'Fajar',
            'jumlah' => '10000000',
            'pesan' => 'Pesan',
            'bank' => '1',
        ]);
    }
}
