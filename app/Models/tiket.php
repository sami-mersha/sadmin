<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $fillable = [ 'konser_id', 'jenis_tiket', 'harga_tiket', 'jumlah_tiket'];

    public function konser (){
        return $this->hasMany(Konser::class);
    }
}
