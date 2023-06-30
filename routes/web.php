<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/show', [PageController::class,'show'])->name('show');

Route::get('/create/announcement',[AnnouncementController::class,'createAnnouncement'])->name('announcements.create');
Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'detailAnnouncement'])->name('announcements.detail');
Route::get('/category/{category}', [CategoryController::class, 'categoryShow'] )->name('categories.detail');



//Rotte revisore

Route::get('/revisor/homepage', [RevisorController::class,'homepage'])->name('revisor.homepage');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class,'rejectAnnouncement'])->name('revisor.reject_announcement');