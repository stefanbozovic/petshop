<?php

namespace App\Http\Controllers;

use App\Models\Necklace;
use App\Http\Resources\NecklaceResource;
use Illuminate\Http\Request;

class NecklaceController extends Controller
{
    public function index()
    {
        $necklaces=Necklace::all();
        return $necklaces;
    }
    public function show(Necklace $necklace)
    {
        return new NecklaceResource($necklace);
    }
}
