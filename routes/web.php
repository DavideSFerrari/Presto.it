<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
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
Route::get('/detail/announcement/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.detail');
