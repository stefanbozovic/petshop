<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Owner extends Model
{
    use HasApiTokens, HasFactory;
    
    protected $hidden = [
        'sifra',
        'remember_token',
    ];
    //protected $quareded=['id'];

    public function pets(){
        return $this->hasMany(Pet::class);//Owner ima vise Pets
    }
}
