<?php

use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/phones');
Route::resource('phones', PhoneController::class);
