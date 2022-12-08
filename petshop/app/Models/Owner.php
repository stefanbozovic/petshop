<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    
    //protected $quareded=['id'];

    public function pets(){
        return $this->hasMany(Post::class);//Owner ima vise Pets
    }
}
