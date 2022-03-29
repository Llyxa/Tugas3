<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
    return view('welcome');
});

Route::get('/home', [HotelController::class, 'index'])->name('home');
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');
Route::get('/tambah', [HotelController::class, 'tambah'])->name('tambah');
Route::post('/insertdata', [HotelController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [HotelController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [HotelController::class, 'updatedata'])->name('updatedata');
Route::get('/detail/{id}', [HotelController::class, 'show'])->name('detail');
Route::get('/delete/{id}', [HotelController::class, 'delete'])->name('delete');