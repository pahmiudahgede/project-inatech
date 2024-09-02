<?php

use App\Http\Controllers\CobaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TambakController;
use App\Http\Controllers\KolamController;
use App\Http\Controllers\FaseKolamController;
use App\Http\Controllers\PjTambakController;
use App\Http\Controllers\AncoController;
use App\Http\Controllers\KualitasAirController;
use App\Http\Controllers\PenangananController;
use App\Http\Controllers\SamplingController;
use App\Http\Controllers\PakanHarianController;
use App\Http\Controllers\KematianUdangController;
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

Route::get('/coba',[CobaController::class, 'index']);

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'authenticate']);

Route::group(['prefix' => 'kelolaPengguna'], function(){
    Route::get('/', [UserController::class, 'index'])->name('kelolaPengguna.index');
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create'])->name('kelolaPengguna.create');
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show'])->name('kelolaPengguna.show');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('kelolaPengguna.edit');
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');



// Route manajemen tambak
Route::group(['prefix' => 'manajemenTambak'], function(){
    Route::get('/', [TambakController::class, 'index'])->name('tambak.index');
    Route::post('/list', [TambakController::class, 'list']);
    Route::get('/create', [TambakController::class, 'create'])->name('tambak.create');
    Route::post('/', [TambakController::class, 'store']);
    Route::get('/{id}', [TambakController::class, 'show'])->name('tambak.show');
    Route::get('/{id}/edit', [TambakController::class, 'edit'])->name('tambak.edit');
    Route::put('/{id}', [TambakController::class, 'update']);
    Route::delete('/{id}', [TambakController::class, 'destroy']);
});

// Route manajemen kolam
Route::group(['prefix' => 'manajemenKolam'], function(){
    Route::get('/', [KolamController::class, 'index'])->name('kolam.index');
    Route::post('/list', [KolamController::class, 'list']);
    Route::get('/create', [KolamController::class, 'create'])->name('kolam.create');
    Route::post('/', [KolamController::class, 'store']);
    Route::get('/{id}', [KolamController::class, 'show'])->name('kolam.show');
    Route::get('/{id}/edit', [KolamController::class, 'edit'])->name('kolam.edit');
    Route::put('/{id}', [KolamController::class, 'update']);
    Route::delete('/{id}', [KolamController::class, 'destroy']);
});

// Route fase tambak
Route::group(['prefix' => 'faseKolam'], function(){
    Route::get('/', [FaseKolamController::class, 'index'])->name('fasekolam.index');
    Route::post('/list', [FaseKolamController::class, 'list']);
    Route::get('/create', [FaseKolamController::class, 'create'])->name('fasekolam.create');
    Route::post('/', [FaseKolamController::class, 'store']);
    Route::get('/{id}', [FaseKolamController::class, 'show'])->name('fasekolam.show');
    Route::get('/{id}/edit', [FaseKolamController::class, 'edit'])->name('fasekolam.edit');
    Route::put('/{id}', [FaseKolamController::class, 'update']);
    Route::delete('/{id}', [FaseKolamController::class, 'destroy']);
});

// Route manajemen pj tambak
Route::group(['prefix' => 'pjTambak'], function(){
    Route::get('/', [PjTambakController::class, 'index'])->name('pjtambak.index');
    Route::post('/list', [PjTambakController::class, 'list']);
    Route::get('/create', [PjTambakController::class, 'create'])->name('pjtambak.create');
    Route::post('/', [PjTambakController::class, 'store']);
    Route::get('/{id}', [PjTambakController::class, 'show'])->name('pjtambak.show');
    Route::get('/{id}/edit', [PjTambakController::class, 'edit'])->name('pjtambak.edit');
    Route::put('/{id}', [PjTambakController::class, 'update']);
    Route::delete('/{id}', [PjTambakController::class, 'destroy']);
});

// Route anco
Route::group(['prefix' => 'anco'], function(){
    Route::get('/', [AncoController::class, 'index'])->name('anco.index');
    Route::post('/list', [AncoController::class, 'list']);
    Route::get('/create', [AncoController::class, 'create'])->name('anco.create');
    Route::post('/', [AncoController::class, 'store']);
    Route::get('/{id}', [AncoController::class, 'show'])->name('anco.show');
    Route::get('/{id}/edit', [AncoController::class, 'edit'])->name('anco.edit');
    Route::put('/{id}', [AncoController::class, 'update']);
    Route::delete('/{id}', [AncoController::class, 'destroy']);
});

// Route kualitas air
Route::group(['prefix' => 'kualitasair'], function(){
    Route::get('/', [KualitasAirController::class, 'index'])->name('kualitasair.index');
    Route::post('/list', [KualitasAirController::class, 'list']);
    Route::get('/create', [KualitasAirController::class, 'create'])->name('kualitasair.create');
    Route::post('/', [KualitasAirController::class, 'store']);
    Route::get('/{id}', [KualitasAirController::class, 'show'])->name('kualitasair.show');
    Route::get('/{id}/edit', [KualitasAirController::class, 'edit'])->name('kualitasair.edit');
    Route::put('/{id}', [KualitasAirController::class, 'update']);
    Route::delete('/{id}', [KualitasAirController::class, 'destroy']);
});

// Route penanganan
Route::group(['prefix' => 'penanganan'], function(){
    Route::get('/', [PenangananController::class, 'index'])->name('penanganan.index');
    Route::post('/list', [PenangananController::class, 'list']);
    Route::get('/create', [PenangananController::class, 'create'])->name('penanganan.create');
    Route::post('/', [PenangananController::class, 'store']);
    Route::get('/{id}', [PenangananController::class, 'show'])->name('penanganan.show');
    Route::get('/{id}/edit', [PenangananController::class, 'edit'])->name('penanganan.edit');
    Route::put('/{id}', [PenangananController::class, 'update']);
    Route::delete('/{id}', [PenangananController::class, 'destroy']);
});

// Route sampling
Route::group(['prefix' => 'sampling'], function(){
    Route::get('/', [SamplingController::class, 'index'])->name('sampling.index');
    Route::post('/list', [SamplingController::class, 'list']);
    Route::get('/create', [SamplingController::class, 'create'])->name('sampling.create');
    Route::post('/', [SamplingController::class, 'store']);
    Route::get('/{id}', [SamplingController::class, 'show'])->name('sampling.show');
    Route::get('/{id}/edit', [SamplingController::class, 'edit'])->name('sampling.edit');
    Route::put('/{id}', [SamplingController::class, 'update']);
    Route::delete('/{id}', [SamplingController::class, 'destroy']);
});

// Route pakan harian
Route::group(['prefix' => 'pakanHarian'], function(){
    Route::get('/', [PakanHarianController::class, 'index'])->name('pakanharian.index');
    Route::post('/list', [PakanHarianController::class, 'list']);
    Route::get('/create', [PakanHarianController::class, 'create'])->name('pakanharian.create');
    Route::post('/', [PakanHarianController::class, 'store']);
    Route::get('/{id}', [PakanHarianController::class, 'show'])->name('pakanharian.show');
    Route::get('/{id}/edit', [PakanHarianController::class, 'edit'])->name('pakanharian.edit');
    Route::put('/{id}', [PakanHarianController::class, 'update']);
    Route::delete('/{id}', [PakanHarianController::class, 'destroy']);
});

// Route kematian udang
Route::group(['prefix' => 'kematianUdang'], function(){
    Route::get('/', [KematianUdangController::class, 'index'])->name('kematianudang.index');
    Route::post('/list', [KematianUdangController::class, 'list']);
    Route::get('/create', [KematianUdangController::class, 'create'])->name('kematianudang.create');
    Route::post('/', [KematianUdangController::class, 'store']);
    Route::get('/{id}', [KematianUdangController::class, 'show'])->name('kematianudang.show');
    Route::get('/{id}/edit', [KematianUdangController::class, 'edit'])->name('kematianudang.edit');
    Route::put('/{id}', [KematianUdangController::class, 'update']);
    Route::delete('/{id}', [KematianUdangController::class, 'destroy']);
});

