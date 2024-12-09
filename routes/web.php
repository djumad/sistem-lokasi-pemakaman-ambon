<?php

use App\Livewire\Peta;
use Illuminate\Support\Facades\Route;

Route::get('/', [Peta::class, 'render']);