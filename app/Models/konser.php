<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi', 'tanggal', 'lokasi', 'kuota_tiket', 'image'];
}
