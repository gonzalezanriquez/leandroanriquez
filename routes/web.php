<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MuseoController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CiclolectivoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\FamiliarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConstanciaController;



Route::patch('/contact/{id}/read', [ContactController::class, 'markAsRead'])->name('contact.read');
Route::patch('/contact/{id}/unread', [ContactController::class, 'markAsUnread'])->name('contact.unread');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');




// BIENVENIDA
Route::get('/', function () { return view('welcome'); });
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/register', [AuthenticatedSessionController::class, 'create'])->name('register');

// API GOOGLE
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('google/callback', [GoogleController::class, 'handleGoogleCallback']);



Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// AUTH
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('familiars', FamiliarController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile', [UserController::class, 'updatePassword'])->name('password.update'); 

    Route::post('/logout', [ProfileController::class, 'logout'])->name('logout');

    Route::resource('museos', MuseoController::class);
    
    Route::resource('noticias', UserController::class);
    Route::get('/news', [NoticiaController::class, 'noticias'])->name('noticias.noticias');
    Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');
    Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');    
    Route::get('/noticias/create', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::get('/noticias/{noticia}/edit', [NoticiaController::class, 'edit'])->name('noticias.edit');
    
    Route::delete('/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');    
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');

});

// ADMIN
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/constancia', [ConstanciaController::class, 'showForm'])->name('constancia.form');
    Route::post('/constancia', [ConstanciaController::class, 'generateConstancia'])->name('constancia.generate');
    
 
    Route::resource('users', UserController::class);
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('materia', MateriaController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('ciclolectivos', CiclolectivoController::class);
    Route::resource('cursos', CursoController::class);
    Route::resource('docente', DocenteController::class); 

    Route::get('/contact/messages', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/messages/{id}', [ContactController::class, 'show'])->name('contact.show');
    Route::patch('/contact/messages/{id}/read', [ContactController::class, 'markAsRead'])->name('contact.read');


});

require __DIR__.'/auth.php';
