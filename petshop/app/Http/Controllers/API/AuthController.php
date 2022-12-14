<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \App\Models\Owner;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'ime'=>'required|string|max:255',
            'email'=>'required|string|max:255|email|unique:owners', //da bude unique u tabeli "owners"
            'sifra'=>'required|string|min:8',
        ]);
        if($validator->fails()){
            return response()->json($validator->error());
        }
        $owner = Owner::create([
            'ime'=>$request->ime,
            'email'=>$request->email,
            'sifra'=>$request->sifra,
        ]);
        $token = $owner->createToken('auth_token')->plainTextToken; //potreban za ulogovanje
        return response()->json(['data'=>$owner, 'access_token'=>$token, 'token_type'=>'Bearer']);
    }
}

