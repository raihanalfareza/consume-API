<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampahController;

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
Route::get('/', [SampahController::class, 'index']); 


Route::get('/sampah', [SampahController::class, 'index']); 
Route::get('/sampah/create', [SampahController::class, 'create']);
Route::post('/sampah/store', [SampahController::class, 'store']);
Route::get('/sampah/{id}', [SampahController::class, 'show']);
Route::get('sampah/trash',[ApotekController::class,'onlyTrash'])->name('trash');
Route::get('/sampah/edit/{id}', [SampahController::class, 'edit'])->name('edit');
Route::patch('/sampah/update/{id}', [SampahController::class, 'update'])->name('update');
Route::delete('/sampah/delete/{id}', [SampahController::class, 'delete'])->name('delete');
    