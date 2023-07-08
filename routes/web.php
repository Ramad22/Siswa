<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\loginController;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


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


    

Route::get('Super',[EmployeeController::class,'Super'])->name('Super')->middleware('auth');
Route::get('siswa',[EmployeeController::class,'index'])->name('siswa')->middleware('auth');

Route::get('tambahsiswa',[EmployeeController::class,'tambahsiswa'])->name('tambahsiswa');
Route::post('insertdata',[EmployeeController::class,'insertdata'])->name('insertdata');

Route::get('tampilkandata/{id}',[EmployeeController::class,'tampilkandata'])->name('tampilkandata');
Route::post('updatedata/{id}',[EmployeeController::class,'updatedata'])->name('updatedata');

Route::get('delete/{id}',[EmployeeController::class,'delete'])->name('delete');

Route::get('auth/google',[GoogleController::class,'redirect'])->name('google-auth');
Route::get('auth/google/callback',[GoogleController::class,'callbackGoogle']);

Route::get('/Login',[loginController::class,'Login'])->name('login')->middleware('guest');
Route::get('/Regis',[loginController::class,'Regis'])->name('Regis')->middleware('guest');

Route::post('/Loginproses',[loginController::class,'Loginproses'])->name('Loginproses');
// Route::get('/Register',[LoginController::class,'Register'])->name('Register')->middleware('guest');
Route::post('/Registeruser',[loginController::class,'Registeruser'])->name('Registeruser');

Route::get('/logout',[loginController::class,'logout'])->name('logout');






