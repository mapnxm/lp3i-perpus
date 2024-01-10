<?php

use App\Http\Controllers\buku;
use App\Http\Controllers\Controller;
use App\Http\Controllers\data_peminjam as DP;
use App\Http\Controllers\data_peminjam;
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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('daftar_buku', function () {
//     return view('list_buku');
// });
Route::get('edit_buku', function () {
    return view('edit');
});
Route::get('/', [Controller::class, 'index']);
Route::get('/buku_dipinjam', [DP::class, 'rentlogs']);
Route::get('/list_buku', [buku::class, 'listbuku']);
Route::post('/store', [buku::class,'store']);
Route::put('{id}', [buku::class, 'update']);
Route::get('{id}/update', [buku::class, 'edit']);
Route::get('{id}/del', [buku::class, 'delete']);
Route::get('{id}/hapus', [data_peminjam::class, 'delete']);
Route::get('{id}/ubah', [buku::class, 'status']);
Route::post('/kirim', [DP::class, 'store']);
