<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function homepage() {
        $announcements = Announcement::all();
        return view('homepage', compact('announcements'));
    }

    public function show ($announcements){
        
       Announcement::findOrFail($announcements);
       return view('show', ['announcements' => $announcements]);
        
    }
}

  
