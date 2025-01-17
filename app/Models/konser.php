<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tanggal', 'jam', 'lokasi', 'deskripsi','image',];

    public function order (){
        return $this->hasMany(Order::class);
    }

    public function tiket(){
        return $this->belongsTo(Tiket::class,'tiket_id');
    }

}
