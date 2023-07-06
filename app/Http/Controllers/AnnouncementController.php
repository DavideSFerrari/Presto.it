<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index (Announcement $announcements){
        
        $announcements = Announcement::where('is_accepted',true)->get()->sortByDesc('created_at');;
        return view('announcements.index', compact('announcements'));
        
    }

    public function createAnnouncement(){
        
        return view('announcements.create');
    }

    public function detailAnnouncement(Announcement $announcement){
        
        return view('announcements.detail', compact('announcement'));
    }


}
