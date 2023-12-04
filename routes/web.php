<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getuserdata',[UserController::class,'manage']);
Route::get('/getuserpost',[PostController::class,'index']);
Route::get('/create',[UserController::class,'insert'] );
Route::post('/create',[UserController::class,'store'] );
Route::get('/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');
Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
Route::post('/user/update/{id}',[UserController::class,'update'])->name('user.update');

