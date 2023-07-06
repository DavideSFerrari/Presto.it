<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
use Laravel\Socialite\Contracts\Provider;
use App\Http\Controllers\Auth\ProviderController;

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

// --- PAGE

Route::get('/', [PageController::class,'homepage'])->name('homepage');

// Cambio Lingua
Route::post('/lingua/{lang}', [PageController::class, 'setLanguage'])->name('set_language_locale');


// --- ANNOUNCEMENT

Route::get('/announcement/homepage', [AnnouncementController::class,'index'])->name('announcements.index');
Route::get('/create/announcement',[AnnouncementController::class,'createAnnouncement'])->name('announcements.create');
Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'detailAnnouncement'])->name('announcements.detail');
Route::get('/category/{category}', [CategoryController::class, 'categoryShow'] )->name('categories.detail');



// --- REVISORE

Route::get('/revisor/homepage', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accepted_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// Richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('mail.become_revisor');

// Rendi utente revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Ricerca annuncio
Route::get('/ricerca/annuncio', [RevisorController::class, 'searchAnnouncements'])->name('announcements.search');

// Login Google
 
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

