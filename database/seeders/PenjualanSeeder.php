<?php

namespace Database\Seeders;
use App\Models\Penjualan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjualan::create([
            'nama_penjual' => 'Fajar',
            'alamat_penjual' => 'Jonggol',
            'no_hp' => '081010101',
            'berat_sampah' => '5',
            'jenis_pembayaran' => 'gopay',
            'nomor_pembayaran' => '081010101',
        ]);
    }
}
