<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

// Home Controller 
// BlogsController 
Route::get('/',[HomeController::class,'index']);
Route::get('/index',[HomeController::class,'index'] );
Route::get('/contact',[HomeController::class,'contact'] );
Route::get('/blogs/{id}',[BlogsController::class,'show']);
Route::get('/blogs',[BlogsController::class,'index'] );
