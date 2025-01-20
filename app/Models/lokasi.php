<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    protected $fillable=['location'];

    public function konser(){
        return $this->belongsToMany(konser::class);
    }
}
