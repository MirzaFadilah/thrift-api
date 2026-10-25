<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pakaian;

class PakaianSeeder extends Seeder
{
    public function run(): void
    {
        Pakaian::insert([
            [
                'nama' => 'Vintage Center Swoosh Crewneck',
                'brand' => 'Nike',
                'harga' => 250000,
                'kategori' => 'Crewneck',
                'ukuran' => 'L',
                'kondisi' => '95% Mulus',
                'status' => 'tersedia',
                'foto' => 'https://contoh.com/foto1.jpg'
            ],
            [
                'nama' => 'Dickies 874 Work Pants',
                'brand' => 'Dickies',
                'harga' => 150000,
                'kategori' => 'Celana',
                'ukuran' => '32',
                'kondisi' => '90% Warna pekat',
                'status' => 'tersedia',
                'foto' => 'https://contoh.com/foto2.jpg'
            ],
            [
                'nama' => 'Carhartt Detroit Jacket',
                'brand' => 'Carhartt',
                'harga' => 650000,
                'kategori' => 'Jaket',
                'ukuran' => 'XL',
                'kondisi' => 'Terdapat fading alami',
                'status' => 'tersedia',
                'foto' => 'https://contoh.com/foto3.jpg'
            ],
            [
                'nama' => 'Uniqlo Flannel Shirt',
                'brand' => 'Uniqlo',
                'harga' => 80000,
                'kategori' => 'Kemeja',
                'ukuran' => 'M',
                'kondisi' => 'Like new',
                'status' => 'tersedia',
                'foto' => 'https://contoh.com/foto4.jpg'
            ],
            [
                'nama' => 'Adidas Track Pants',
                'brand' => 'Adidas',
                'harga' => 120000,
                'kategori' => 'Celana',
                'ukuran' => 'L',
                'kondisi' => 'Minus tali pudar',
                'status' => 'terjual',
                'foto' => 'https://contoh.com/foto5.jpg'
            ],
        ]);
    }
}