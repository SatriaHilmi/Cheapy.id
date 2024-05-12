<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
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
//     return view('dashboard');
// });
// Route::get('user', function () {
//     return view('user');
// });
Route::get('/main/dashboard', [DasboardController::class, 'dash']);
Route::get('/main/laporan', [DasboardController::class, 'ho']);
Route::get('/main/user', [DasboardController::class, 'hi']);

