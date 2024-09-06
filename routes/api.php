<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/V1/villas', [\App\Http\Controllers\Api\V1\VillaController::class, 'index']);

