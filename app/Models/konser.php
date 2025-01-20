<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konser extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'tanggal', 'jam', 'lokasi_id', 'deskripsi','image',];

    public function order (){
        return $this->hasMany(Order::class);
    }

    public function tiket(){
        return $this->hasMany(Tiket::class,'tiket_id');
    }
    public function lokasi(){
        return $this->belongsTo(lokasi::class);
    }

}
