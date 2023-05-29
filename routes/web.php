<?php

use App\Http\Controllers\HospitalController;
use Illuminate\Support\Facades\Route;

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

 Route::get('/', [HospitalController::class, 'index'])->name('home');
 Route::get('/create', [HospitalController::class, 'create'])->name('create');
 Route::post('/store', [HospitalController::class, 'store'])->name('store');
 Route::get('/edit/{id}', [HospitalController::class, 'edit'])->name('edit');
 Route::patch('/update/{id}', [HospitalController::class, 'update'])->name('update');
 Route::delete('/delete/{id}',[HospitalController::class, 'destroy' ]) -> name('destroy');