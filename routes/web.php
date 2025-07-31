<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\UserCustomController;
use App\Http\Controllers\UserController;

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

Route::resource('siswa', SiswaController::class);
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('siswa/{id_siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('siswa/{id_siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('siswa/{id_siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

Route::resource('guru', GuruController::class);
Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
Route::get('guru/{id_guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
Route::put('guru/{id_guru}', [GuruController::class, 'update'])->name('guru.update');
Route::delete('guru/{id_guru}', [GuruController::class, 'destroy'])->name('guru.destroy');

Route::resource('kelas', KelasController::class);
Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('kelas/{id_kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('kelas/{id_kelas}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('kelas/{id_kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');

Route::get('/react', function () {
    return view('react');
});

Route::resource('/user', UserController::class);
Route::resource('user', UserController::class);
Route::resource('user', UserCustomController::class);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginProcess']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('siswa', SiswaController::class);
    Route::resource('guru', GuruController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('user', UserCustomController::class);
});

Route::get('/dashboard', function () {
    if (!Session::has('username')) return redirect()->route('login');
    return view('dashboard');
})->name('dashboard');