<?php

use App\Models\User;
use App\Models\Spoon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpoonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OverviewController;
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
Route::get('/overview', [OverviewController::class, 'viewOverview'])->middleware(['auth', 'verified'])->name('overview');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Spoon routes

Route::get('/spoon/{id}', [SpoonController::class, 'viewSpoon'])->name('spoon.view');
Route::get('/createSpoon', [SpoonController::class, 'handleCreateSpoon'])->name('spoon.create');
Route::get('/updateSpoon', [SpoonController::class, 'handleUpdateSpoon'])->name('spoon.update');
Route::get('/removeSpoon', [SpoonController::class, 'handleRemoveSpoon'])->name('spoon.remove');

require __DIR__ . '/auth.php';