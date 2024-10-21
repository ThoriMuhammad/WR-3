<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\User\UserDocumentController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/menu', [AdminNewsController::class, 'index'])->name('user.menu');
// Route::get('/news-management', [NewsController::class, 'index'])->name('news.management');


Route::get('/profil', function (){
    return view('user.profil');
});

Route::get('/proker', function (){
    return view('user.programkerja');
});
// Route::resource('documents', DocumentController::class);

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('news', AdminNewsController::class);
// });

// Route::resource('news', NewsController::class);

// Route::get('/news', [NewsController::class, 'index'])->name('news.index');
// Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
// Route::post('/news', [NewsController::class, 'store'])->name('news.store');

Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AdminAuthController::class, 'login']);
Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');
    Route::resource('news', NewsController::class);
    Route::resource('documents', DocumentController::class);
    Route::get('/documents/create', [DocumentController::class, 'create'])->name('documents.create');
    Route::post('/documents', [DocumentController::class, 'store'])->name('documents.store');
});

// USER
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/menu', [AdminNewsController::class, 'index'])->name('menu');
    Route::get('/news/{news}', [AdminNewsController::class, 'show'])->name('news.show');
    Route::get('/documents', [UserDocumentController::class, 'index'])->name('documents.index');
    Route::get('/documents/{document}/download', [UserDocumentController::class, 'download'])->name('documents.download');
});