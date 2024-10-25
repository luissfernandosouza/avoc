<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MotoristaController;
use App\Http\Controllers\CaminhaoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class,  'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Define Motorista routes once for clarity
Route::get('/motorista/create', [MotoristaController::class, 'create'])->name('motorista.create');
Route::post('/motorista', [MotoristaController::class, 'store'])->name('motorista.store');



Route::get('/caminhao/create', [CaminhaoController::class, 'create'])->name('caminhao.create');
Route::post('/caminhao', [CaminhaoController::class, 'store'])->name('caminhao.store');


require __DIR__.'/auth.php';