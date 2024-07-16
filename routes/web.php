<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\ShowUsers;
use App\Http\Controllers\RoleController;
use App\View\Auth\Register;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\MuseoController;
use App\Http\Controllers\GoogleController;


Route::get('/museos', [MuseoController::class, 'index'])->name('museos.index');;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/holidays', [HolidayController::class, 'index']);


Route::get('/Auth/register', function () {
    return view('register');
})->name('register');



Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('google/callback', [GoogleController::class, 'handleGoogleCallback']);



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::get('/users', ShowUsers::class)->name('users');;
    
    Route::get('/users',[UserController::class, 'index'])->name('users.index');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    

    Route::get('/estudiante',[EstudianteController::class, 'index'])->name('estudiante.index');
    Route::get('/estudiante/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiante.edit');
    Route::patch('/estudiante/{id}', [EstudianteController::class, 'update'])->name('estudiante.update');

    Route::get('/docente',[DocenteController::class, 'index'])->name('docente.index');
    Route::get('/docente/{id}/edit', [DocenteController::class, 'edit'])->name('docente.edit');
    Route::patch('/docente/{id}', [DocenteController::class, 'update'])->name('docente.update');

    Route::get('/materia',[MateriaController::class, 'index'])->name('materia.index');
    Route::get('/materia/{id}/edit', [MateriaController::class, 'edit'])->name('materia.edit');
    Route::patch('/materia/{id}', [MateriaController::class, 'update'])->name('materia.update');

    // Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/roles', [RoleController::class, 'create'])->name('roles.create');

});


require __DIR__.'/auth.php';
