<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\DocumentController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', function () {
    return view('admin.menu');
});
Route::get('/profil', function (){
    return view('admin.profil');
});
Route::get('/proker', function (){
    return view('admin.programkerja');
});
Route::resource('documents', DocumentController::class);
Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');

// Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
// Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Protected route for admin
    // Route::get('pegawai/menu', function () {
    //     return view('pegawai.menu');  // buat view dashboard admin
    // })->name('pegawai.menu');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);