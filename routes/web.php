<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/comments/morning', [GreetingController::class, 'morning']);
Route::get('/comments/afternoon', [GreetingController::class, 'afternoon']);
Route::get('/comments/evening', [GreetingController::class, 'evening']);
Route::get('/comments/night', [GreetingController::class, 'night']);
Route::get('/comments/freeword/{word}', [GreetingController::class, 'freeword']);
Route::get('/comments/random', [GreetingController::class, 'random']);
