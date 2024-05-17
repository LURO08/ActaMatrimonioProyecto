<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActaController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvitacionMailable;

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

Route::get('/dashboard', [ActaController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('acta/create', [ActaController::class, 'create'])->name('acta.create');
Route::post('acta', [ActaController::class, 'store'])->name('acta.store');
Route::get('acta/{acta}', [ActaController::class, 'show'])->name('acta.show');
Route::delete('acta/{acta}', [ActaController::class, 'destroy'])->name('acta.destroy');
Route::get('acta/{acta}/eliminar', [ActaController::class, 'eliminar'])->name('acta.eliminar');
Route::get('acta/{id}/invitacion', [ActaController::class, 'invit'])->name('acta.invit');
Route::get('acta/{acta}/showinvit', [ActaController::class, 'showinvit'])->name('acta.showinvit');

Route::get('invitacion', [ActaController::class, 'storeInvitacion'])->name('invitacion.store');


Route::get('persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('persona', [PersonaController::class, 'store'])->name('persona.store');
Route::delete('persona/{persona}', [PersonaController::class, 'destroy'])->name('persona.destroy');
Route::get('/persona/{persona}', [PersonaController::class, 'show'])->name('persona.show');
Route::get('/persona/{persona}/eliminar', [PersonaController::class, 'eliminar'])->name('persona.eliminar');
Route::get('/persona/{persona}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{persona}', [PersonaController::class, 'update'])->name('persona.update');