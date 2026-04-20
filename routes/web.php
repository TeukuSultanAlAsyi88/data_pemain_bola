<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;

Route::get('/', function () {
    return redirect()->route('pemain.index');
});

Route::resource('pemain', PemainController::class);