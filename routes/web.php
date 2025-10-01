<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::resource('alunos', AlunoController::class);

Route::resource('professores', AlunoController::class);

