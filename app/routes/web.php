<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/gerar-certificado', [UtilController::class, 'gerarCertificado'])->name('gerarCertificado');
