<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[PostController::class,'show']);
Route::get('add_post',[PostController::class,'create']);
Route::post('add_post',[PostController::class,'store'])->name('insert');
Route::get('edit/{id}',[PostController::class,'edit']);
Route::post('edit',[PostController::class,'update'])->name('update');
Route::get('delete/{id}',[PostController::class,'destroy']);
Route::get('trash',[PostController::class,'trash']);
Route::get('restore/{id}',[PostController::class,'restore']);

Route::get('pdf',[PdfController::class,'generate']);
