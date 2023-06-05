<?php

use App\Models\User;
use App\Models\Lepel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LepelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'viewDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Lepel routes

Route::get('/createLepel', [LepelController::class, 'handleCreateLepel'])->name('lepel.create');
Route::get('/removeLepel', [LepelController::class, 'handleRemoveLepel'])->name('lepel.remove');

require __DIR__ . '/auth.php';