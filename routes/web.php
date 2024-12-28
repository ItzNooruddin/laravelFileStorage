<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("image-upload", [ImageController::class, "index"]);
Route::post("image-upload", [ImageController::class, "store"])->name("image.upload.store");
