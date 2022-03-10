<?php

use App\Http\Controllers\Admin\InternoController;
use App\Http\Controllers\HomeController;
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
//Route::get('/', [HomeController::class,'index'])->name('Casa');
Route::get('',[InternoController::class,'index'])->name('admin.index');
Route::get('/agregar',[InternoController::class, 'create'])->name('admin.create');
Route::post('/nuevo',[InternoController::class, 'store'])->name('admin.store');
Route::get('/editar/{interno}',[InternoController::class, 'edit'])->name('admin.edit');
Route::put('/actualizar/{interno}',[InternoController::class, 'update'])->name('admin.update');
Route::delete('/delete/{interno}/',[InternoController::class, 'destroy'])->name('admin.delete');

//Route::resource('interno', InternoController::class);
