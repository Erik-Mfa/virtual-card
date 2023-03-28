<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JohnController;

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

Route::redirect('/', '/generate');
Route::view('/generate', '/generate');

Route::get('/john', [JohnController::class, 'index']);