<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\BajuController;
use App\Http\Controllers\CelanaController;
use App\Http\Controllers\JacketController;




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

Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/baju/all', [BajuController::class, 'index']);
Route::get('/celana/all', [CelanaController::class, 'index']);
Route::get('/baju/detail{baju}', [BajuController::class, 'show']);
Route::get('/celana/detail{celana}', [CelanaController::class, 'show']);
Route::get('/jacket/all',[JacketController::class,'index']);
Route::get('/jacket/Detail{jacket}',[JacketController::class,'show']);