<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JohnController;
use App\Http\Controllers\QRcodeController;

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

//rotas página de gerar QR code
Route::get('/generate', [QRcodeController::class, 'show'])->name('john');
Route::post('/generate', [QRcodeController::class, 'generate'])->name('john.generate');

//rotas página sobre o John
Route::get('/john', [JohnController::class, 'show'])->name('john');