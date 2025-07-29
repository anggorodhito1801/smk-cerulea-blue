<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Siswa;

Route::get('/siswa', function () {
    return Siswa::all();
});

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

Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/siswa', [SiswaController::class, 'store']);

Route::get('/react', function () {
    return view('react');
});
