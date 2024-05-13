<?php

use App\Http\Controllers\PenjualController;
use App\Http\Controllers\DaftarIsiController;
use App\Http\Controllers\LanggananController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.dashboard');
});

Route::resource('penjual', PenjualController::class);
Route::resource('daftarIsi', DaftarIsiController::class);
Route::resource('langganan', LanggananController::class);
