<?php

declare(strict_types=1);

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', [TasksController::class, 'indexAction']);

Route::post('/task', [TasksController::class, 'createAction']);
