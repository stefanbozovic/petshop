<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    public function owner(){
        return $this->belongsTo(Category::class); //Pet pripada samo jednom Owner-u
    }
    public function neklaces(){
        return $this->hasMany(Neklace::class);//Pet ima vise Nekclaces
    }
}
