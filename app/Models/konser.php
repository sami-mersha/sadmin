<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'deskripsi', 'lokasi', 'kuota_tiket', 'image', 'detail'];

    public function order (){
        return $this->hasMany(Order::class);
    }
}
