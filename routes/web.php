<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Landing Page Controller

Route::get('/',[LandingPageController::class,'landingPage'])->name('LandingPage');
