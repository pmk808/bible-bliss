<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VotdController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SearchHistoryController;

Route::get("/search", [SearchController::class, 'search'])->name('search');

Route::post("/login", [UserController::class, 'login']);

Route::get("/logout", [LogoutController::class, 'logout']);

Route::get("/about", [AboutController::class, 'about']);

Route::get("/", [LandingController::class, 'passVotd']);







