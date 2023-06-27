<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AnnouncementController;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
        
        return view('announcements.create');
    }
}
