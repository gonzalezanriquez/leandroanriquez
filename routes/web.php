<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\ShowUsers;
use App\Http\Controllers\RoleController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

    //Route::get('/users', ShowUsers::class)->name('users');;
    
    Route::get('/users',[UserController::class, 'index'])->name('users');
    Route::get('/buscar',[UserController::class, 'search'])->name('buscar'); 


    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user/{id}', [UserController::class, 'update'])->name('user.update');


    // Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
    // Route::get('/roles', [RoleController::class, 'create'])->name('roles.create');
    Route::resource('roles', RoleController::class);

});


require __DIR__.'/auth.php';
