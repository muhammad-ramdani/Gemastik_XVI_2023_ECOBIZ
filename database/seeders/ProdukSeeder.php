<?php

namespace Database\Seeders;
use App\Models\Produk;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 'gambar','nama','harga','stok',
        Produk::create([
            'gambar'=>'PETT.png',
            'nama'=>'Sampah Plastik PET Trasparan (Polythylene)',
            'harga'=>'5000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'HDPE.png',
            'nama'=>'Sampah Plastik HDPE (High-density Polyethylene)',
            'harga'=>'1000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'PVC.png',
            'nama'=>'Sampah Plastik PVC (Polyvynil Chloride)',
            'harga'=>'1000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'LDPE.png',
            'nama'=>'Sampah Plastik LDPE (Low-density Polyethylene)',
            'harga'=>'2000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'PP.png',
            'nama'=>'Sampah Plastik PP (Polypropylene)',
            'harga'=>'2000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'PS.png',
            'nama'=>'Sampah Plastik PS (Polysterene)',
            'harga'=>'2000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'O.png',
            'nama'=>'Sampah Plastik O (Others)',
            'harga'=>'2000',
            'stok'=>'100',
        ]);

        Produk::create([
            'gambar'=>'PETW.png',
            'nama'=>'Sampah Plastik PET Warna (Polythylene)',
            'harga'=>'2500',
            'stok'=>'100',
        ]);
    }
}
