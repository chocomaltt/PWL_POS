<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\TransaksiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->guard('api')->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::group(['prefix' => 'users'], function(){
    Route::get('/', [UserController::class, 'index']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{user}', [UserController::class, 'show']);
    Route::put('/{user}', [UserController::class, 'update']);
    Route::delete('/{user}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'barangs'], function(){
    Route::get('/', [BarangController::class, 'index']);
    Route::post('/', [BarangController::class, 'store']);
    Route::get('/{barang}', [BarangController::class, 'show']);
    Route::put('/{barang}', [BarangController::class, 'update']);
    Route::delete('/{barang}', [BarangController::class, 'destroy']);
});

Route::group(['prefix' => 'kategoris'], function(){
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::get('/{kategori}', [KategoriController::class, 'show']);
    Route::put('/{kategori}', [KategoriController::class, 'update']);
    Route::delete('/{kategori}', [KategoriController::class, 'destroy']);
});

Route::group(['prefix' => 'transaksi'], function(){
    Route::get('/', [TransaksiController::class, 'index']);
    Route::post('/', [TransaksiController::class, 'store']);
    Route::get('/{transaksi}', [TransaksiController::class, 'show']);
    Route::put('/{transaksi}', [TransaksiController::class, 'update']);
    Route::delete('/{transaksi}', [TransaksiController::class, 'destroy']);
});