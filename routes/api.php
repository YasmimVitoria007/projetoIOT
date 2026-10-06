<?php

use App\Http\Controllers\RegistroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::post('/registro', [RegistroController::class, 'store']);
route::get('/registro/valor', [RegistroController::class, 'getValor']);
