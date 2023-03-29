<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Redirector;
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

//rotas página que gera QR code
Route::get('/generate/{qrcode?}', [QRcodeController::class, 'show'])->name('generate.show');
Route::post('/generate', [QRcodeController::class, 'generate'])->name('generate.update');

//rotas página sobre o John
Route::get('/john', [JohnController::class, 'show'])->name('john');