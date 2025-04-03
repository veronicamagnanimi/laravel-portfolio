<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// index
Route::get('projects', [PostController::class, 'index']);

// show
Route::get('projects/{project}', [PostController::class, 'show']);

