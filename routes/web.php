<?php

use Illuminate\Support\Facades\Route;
//use app\http\Controllers\PageControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
   
// });
Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/aboutus',[PageController::class,'aboutus'])->name('home');
// Route::get('/login',[PageController::class,'login'])->name('home');
Route::get('/login',[UserController::class,'index'])->name('home');
Route::get('/ai',[PageController::class,'aipage'])->name('home');
Route::get('/confirm',[PageController::class,'confirm'])->name('home');
// Route::get('/signup',[PageController::class,'signup'])->name('home');
Route::get('/signup',[UserController::class,'create'])->name('home');
 Route::get('/subject',[SubjectController::class,'index'])->name('home');
Route::resource('users',UserController::class);
//  Route::resources('/subject/index1',[SubjectController::class,'index']);
