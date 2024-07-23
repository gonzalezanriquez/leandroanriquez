<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\MuseoController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CiclolectivoController;
use App\Http\Controllers\CursoController;






// BIENVENIDA
Route::get('/', function () { return view('welcome'); });
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/Auth/register', function () { return view('register'); })->name('register');

// API GOOGLE
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    Route::post('/generate-report', [ReportController::class, 'generateUserReport'])->name('reports.generate');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [UserController::class, 'updatePassword'])->name('password.update');
    
    
});

Route::middleware(['auth', 'admin'])->group(function () {

    
    Route::resource('users', UserController::class);
    
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('docente', DocenteController::class);
    Route::resource('materia', MateriaController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('museos', MuseoController::class);
    Route::resource('ciclolectivos', CiclolectivoController::class);
    Route::resource('cursos', CursoController::class);




   
   

    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

    // API MUSEOS
    Route::get('/museos', [MuseoController::class, 'index'])->name('museos.index');

});



require __DIR__.'/auth.php';