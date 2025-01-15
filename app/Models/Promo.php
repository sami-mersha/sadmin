<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'code_promo',
        'nilai_diskon',
        'tanggal_mulai',
        'tanggal_berakhir',
        'status_promo',
    ];
}
