<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/', function () {
    return view('welcome');
});

// Route Resource untuk Ruangan
Route::resource('rooms', RoomController::class);