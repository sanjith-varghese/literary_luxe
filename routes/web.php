<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\readController;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [readController::class, 'index']);
Route::get('/register', [readController::class, 'register']);
Route::get('/login', [readController::class, 'login']);
Route::get('/home', [readController::class, 'home']);
Route::get('/comic', [readController::class, 'comic']);
Route::get('/horror', [readController::class, 'horror']);
Route::get('/romance', [readController::class, 'romance']);
Route::get('/mystry', [readController::class, 'mystry']);
Route::post('/searchAction', [readController::class, 'searchAction']);
Route::post('/bookresult', [readController::class, 'bookresult']);
Route::post('/bookresult', [readController::class, 'bookresult']);
Route::get('/text', [readController::class, 'text']);








Route::get('/adminindex',[adminController::class,'adminindex']);
Route::get('/addbook',[adminController::class,'addbook']);
Route::post('/addbookAction',[adminController::class,'addbookAction']);
Route::get('/view',[adminController::class,'view']);
Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/loginAction',[adminController::class,'loginAction']);
Route::get('/logout',[adminController::class,'logout']);


