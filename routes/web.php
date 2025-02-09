<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


// Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/authentication', [AuthController::class, 'authentication'])->name('authentication');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/asset', [DataController::class, 'asset'])->name('asset');
Route::get('/viewdata-sla', [DataController::class, 'index'])->name('viewdata-sla');
Route::get('/viewdata-slaDetails/{period_id}', [DataController::class, 'details'])->name('viewdata-slaDetails');
