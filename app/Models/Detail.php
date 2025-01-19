<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $fillable = ['order_id', 'riwayat'];

    public function order (){
        return $this->hasMany(order::class);
    }
}
