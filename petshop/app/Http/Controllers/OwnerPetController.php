<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Http\Request;

class OwnerPetController extends Controller
{
    
    public function index($owner_id){
        $pets=Pet::get()->where('owner_id',$owner_id);
        if(is_null($pets)){
            return response()->json('Data not found',404);
        }
        return response()->json($pets);
    }
}
