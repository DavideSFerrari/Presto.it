<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function homepage() {
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }

    public function show (Announcement $announcement){
        
        return view('homepage', compact('announcement'));;
        
    }
}

  
