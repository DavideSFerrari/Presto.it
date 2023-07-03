<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;

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

// Page
Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/show', [PageController::class,'show'])->name('show');

// Announcement
Route::get('/create/announcement',[AnnouncementController::class,'createAnnouncement'])->name('announcements.create');
Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'detailAnnouncement'])->name('announcements.detail');
Route::get('/category/{category}', [CategoryController::class, 'categoryShow'] )->name('categories.detail');


//Rotte revisore

Route::get('/revisor/homepage', [RevisorController::class,'homepage'])->name('revisor.homepage');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->name('revisor.reject_announcement');

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Ricerca annuncio
Route::get('/ricerca/annuncio', [RevisorController::class, 'searchAnnouncements'])->name('announcements.search');

// Cambio Lingua
Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('set_language_locale');