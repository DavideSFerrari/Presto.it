<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
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

    public function edit(Announcement $announcements)
    {
        return view('announcements.edit', compact('announcements'));
    }

    public function destroy(Announcement $announcement)
    {
       
        $announcement->delete();
        return redirect()
            ->route('user_profile.index')
            ->with('success', 'Cancellazione avvenuta con successo!');
    }
}

