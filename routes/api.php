<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\KesatuanController;
use App\Http\Controllers\PersonelController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\Api\AuthController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post("/register", [AuthController::class, "register"]);
Route::post("/login", [AuthController::class, "login"]);

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/animal', [AnimalController::class, 'index']);
Route::post('/animal', [AnimalController::class, 'store']);

Route::get('/staff', [StaffController::class, 'apiStaff']);
Route::get('/staff/{id}', [StaffController::class, 'apiStaffDetail']);


// Route::middleware(['auth:sanctum', 'peran:admin-staff-personel'])->group(function () {
Route::get('/agama', [AgamaController::class, 'index']);
Route::get('/agama/{id}', [AgamaController::class, 'edit']);
Route::put('/agama/{id}', [AgamaController::class, 'update']);
Route::post('/agama/create', [AgamaController::class, 'store']);
Route::get('/kesatuan', [KesatuanController::class, 'index']);

//personel 
Route::get('/personel', [PersonelController::class, 'index']);
Route::get('/personel/{id}', [PersonelController::class, 'show']);
Route::post('/personel/create', [PersonelController::class, 'store']);
Route::get('/personel-edit/{id}', [PersonelController::class, 'edit']);
Route::put('/personel/{id}', [PersonelController::class, 'update']);
Route::delete('/personel/{id}', [PersonelController::class, 'destroy']);
// });
//tugas
Route::get('/tugas', [TugasController::class, 'index']);
Route::get('/tugas/{id}', [TugasController::class, 'show']);
Route::post('/tugas/create', [TugasController::class, 'store']);

