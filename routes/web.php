<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GrupoController;

Route::get('/', [GrupoController::class, 'index']) ->name('inicio');
Route::get('/Gabo', [GrupoController::class, 'Gabo']) ->name('gabo');
Route::get('/ismael', [GrupoController::class, 'ismael']) ->name('ismael');
