<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index()
    {
        $owners=Owner::all();
        return $owners;
    }
  
    public function show($owner_id)
    {
        $owner=Owner::find($owner_id);
        if(is_null($owner)){
            return response()->json('Data not found',404);
        }
        return response()->json($owner);
    }

}
