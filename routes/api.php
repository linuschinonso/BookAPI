<?php

use App\Models\book;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;

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

//get request
Route::get('/books',  [BookController::class, 'index']);



//post request
Route::post('/books',  [BookController::class, 'store']);

   //put request
Route::put('/books/{id}',  [BookController::class, 'update']);

 //delete request
Route::delete('/books/{id}', [BookController::class, 'destroy']);


 
return response()->json([ 'valid' => auth()->check()]);



 