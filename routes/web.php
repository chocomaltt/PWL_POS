<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;
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
//     return view('welcome');
// });

// praktikum 4
// Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/user', [UserController::class, 'index'])->name('/user');
Route::get('/user/create', [UserController::class, 'create'])->name('/user/create');
Route::post('/user', [UserController::class, 'tambah_simpan']);
// Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan'])->name('/user/tambah_simpan');
Route::get('/user/ubah/{id}', [UserController::class, 'ubah'])->name('/user/ubah');
Route::get('/user/hapus/{id}', [UserController::class, 'hapus'])->name('/user/hapus');
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan'])->name('/user/ubah_simpan');

Route::get('/kategori', [KategoriController::class, 'index'])->name('/kategori');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
Route::post('/kategori',[KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori/edit');
Route::put('/kategori/edit/{id}', [KategoriController::class, 'update'])->name('/kategori/simpan');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);

Route::resource('m_user', POSController::class);

Route::get('/level', [LevelController::class, 'index'])->name('/level');
Route::get('level/create', [LevelController::class, 'create'])->name('/level/create');
Route::post('/level', [LevelController::class, 'store']);

Route::get('/', [WelcomeController::class, 'index']);