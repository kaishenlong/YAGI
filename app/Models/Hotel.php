<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    public function detailrooms()
    {
        return $this->hasMany(DetailRoom::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
}
