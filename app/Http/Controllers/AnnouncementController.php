<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){
        
        return view('announcements.create');
    }

    public function detailAnnouncement(Announcement $announcement){
        
        return view('announcements.detail',compact('announcement'));
    }


}
