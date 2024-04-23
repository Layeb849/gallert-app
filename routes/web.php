<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumPhotoController;
use Illuminate\Support\Facades\Route;


Route::resource('/album', AlbumController::class);
Route::resource('/album-photo', AlbumPhotoController::class);
