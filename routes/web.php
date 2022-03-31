<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\matakuliahController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome',['nama mata kuliah'=>'Supply Chain Management','sks'=>'3 sks ']);
});

Route::get('/Mata Kuliah', [matakuliahController::class, 'index']);
 
Route::get('/Mata Kuliah/create', [matakuliahController::class, 'create']);
