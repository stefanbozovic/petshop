<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OwnerController;
use \App\Http\Controllers\PetController;
use \App\Http\Controllers\OwnerPetController;
use \App\Http\Controllers\NecklaceControllerController;
use \App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/owner', function (Request $request) {
    return $request->owner();
});

Route::get('owners',[OwnerController::class, 'index']);
Route::get('owners/{id}',[OwnerController::class, 'show']);

Route::resource('pets', PetController::class);
Route::resource('necklaces', NecklaceController::class);

Route::get('owners/{id}/pets', [OwnerPetController::class, 'index'])->name('owners.pets.index');
*/
Route::post('/register',[AuthController::class, 'register']);


