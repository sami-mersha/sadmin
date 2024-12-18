<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['user_id', 'tiket_id', 'jumlah_tiket', 'harga_total', 'promo'];
    
    public function tiket (){
        return $this->belongsTo(tiket::class);
    }
}
