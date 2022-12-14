<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Resources\PetResource;
use App\Http\Resources\PetCollection;
use Illuminate\Http\Request;

class PetController extends Controller
{   
    public function index()
    {
        $pets=Pet::all();
        return new PetCollection($pets);
    }
    public function show(Pet $pet)
    {
        return new PetResource($pet);
    }

}
