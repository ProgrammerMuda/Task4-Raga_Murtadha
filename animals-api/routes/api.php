<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#coba create route get untuk return data animals

Route::get('/animals', [AnimalController::class, 'index']);


#coba create route get untuk return data animals sesuai ID
Route::get('/animals/{id}', [AnimalController::class, 'getId']);

#coba create route post untuk storing data animals

Route::post('/animals', [AnimalController::class, 'create']);

#coba create route put untuk update data animals

Route::put('/animals/{id}', [AnimalController::class, 'update']);

#coba create route delete untuk remove data animals

Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);




