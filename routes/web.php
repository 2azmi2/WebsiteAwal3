<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebAzmiController;
use App\Http\Controllers\WebAzmiBioController;
use App\Http\Controllers\WebAzmiCommentController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WebBioController;
use App\Http\Controllers\WebCommentController;

//Route::get('/', [WebAzmiController::class,'home']);
Route::get('/', [WebController::class,'index']);
//Route::get('/biodata', [WebAzmiBioController::class,'profile']);
Route::get('/biodata', [WebBioController::class,'index']);
//Route::get('/komentar', [WebAzmiCommentController::class,'advice']);
Route::get('/komentar', [WebCommentController::class,'index']);