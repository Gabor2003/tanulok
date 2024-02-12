<?php
use App\Http\Controllers\TanulokController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tanulok',[TanulokController::class,'index']);

Route::get('/tanulok/create',[TanulokController::class, 'create']);
Route::post('/tanulok',[TanulokController::class,'store']);

Route::get('/tanulok/{id}',[TanulokController::class,'show']);

Route::get('/tanulok/{id}/edit',[TanulokController::class,'edit']);

Route::patch('/tanulok/{id}',[TanulokController::class,'update']);

Route::delete('/tanulok/{id}' ,[TanulokController::class, 'destroy']);
