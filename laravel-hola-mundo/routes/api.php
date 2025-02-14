<?php

use App\Http\Controllers\HolaMundoController;
use Illuminate\Support\Facades\Route;

Route::get('/hola-mundo', HolaMundoController::class);