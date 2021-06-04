<?php

use App\Http\Controllers\SiswaController as SC;
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

Route::get('/', [SC::class, 'index'])->name('home');
Route::get('/siswa/create', [SC::class, 'create'])->name('siswa.create');
Route::post('/siswa/create/store', [SC::class, 'store'])->name('siswa.store');
Route::get('/siswa/edit/{id}', [SC::class, 'edit'])->name('siswa.edit');
Route::patch('/siswa/update/{id}', [SC::class, 'update'])->name('siswa.update');
Route::delete('/siswa/delete/{id}', [SC::class, 'destroy'])->name('siswa.delete');
