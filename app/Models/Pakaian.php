<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    protected $fillable = [
        'nama', 'brand', 'harga', 'kategori', 
        'ukuran', 'kondisi', 'status', 'foto'
    ];
}