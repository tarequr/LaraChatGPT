<?php

use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('index');

// });

Route::get('/', [ChatController::class, 'index'])->name('home');
Route::post('submit/message', [ChatController::class, 'store'])->name('submit.message');
Route::get('reset/', [ChatController::class, 'reset'])->name('submit.reset');
