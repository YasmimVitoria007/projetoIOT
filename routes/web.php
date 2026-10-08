<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('/ambiente/index', AmbienteIndex::class)->name('ambiente.index');

Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');
Route::get('/sensor/index', SensorIndex::class)->name('sensor.index');
