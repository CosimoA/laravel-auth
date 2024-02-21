<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
//     return view('welcome');
// });
// Index
Route::get('/', [PortfolioController::class, 'index'])
    ->name('projects.index');

// Create 

Route::get('/project/create', [PortfolioController::class, 'create'])
    ->name('project.create');

// Store 

Route::post('/project/store', [PortfolioController::class, 'store'])
    ->name('project.store');

// Show 

Route::get('/project/{id}/show', [PortfolioController::class, 'show'])
    ->name('project.show');


// Destroy: 
Route::delete('/project/{id}', [PortfolioController::class, 'destroy'])
    ->name('project.destroy');

// Edit
Route::get('/project/{id}/edit', [PortfolioController::class, 'edit'])
    ->name('project.edit');
    
// Update
Route::put('/project/{id}/edit', [PortfolioController::class, 'update'])
    ->name('project.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
