<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;

Route::get('/kategoria', [KategoriaController::class, 'index']);
Route::get('/tesztek', [TesztController::class, 'index']);
Route::get('/tesztek/kategoria/{id}', [TesztController::class, 'byKategoria']);
