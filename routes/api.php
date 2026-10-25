<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PakaianController;

Route::apiResource('pakaian', PakaianController::class);