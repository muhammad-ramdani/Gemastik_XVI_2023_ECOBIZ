<?php

namespace Database\Seeders;
use App\Models\Pembersihan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembersihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembersihan::create([
            'gambar_tempat_pembersihan' => 'img1.png',
            'nama_lokasi' => 'Wage Market',
            'alamat' => 'Jl. Vihara, Purwokerto Wetan, Kec. Purwokerto Tim., Kabupaten Banyumas, Jawa Tengah 53111',
            'titik_koordinat' => '264819834724872',
            'harga' => '150000',
        ]);

        Pembersihan::create([
            'gambar_tempat_pembersihan' => 'img2.png',
            'nama_lokasi' => 'Pasar Cikini',
            'alamat' => 'Jl. Pegangsaan Timur No.2002, RT.1/RW.1, Pegangsaan',
            'titik_koordinat' => '264819834724872',
            'harga' => '150000',
        ]);

        Pembersihan::create([
            'gambar_tempat_pembersihan' => 'img3.png',
            'nama_lokasi' => 'Pasar Jaya Gondangdia',
            'alamat' => 'Jl. Srikaya No.Raya, RW.6 · (021) 8413411',
            'titik_koordinat' => '264819834724872',
            'harga' => '150000',
        ]);
    }
}
