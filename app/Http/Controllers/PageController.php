<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    

    public function homepage() {
        $announcements = Announcement::where('is_accepted',true)->take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }


    public function setLanguage($lang){
        
        
        session()->put('locale', $lang);
        return redirect ()->back();
    }

    
    public function lavoraconoi() {
        return view('lavoraconoi');
    }

    
}

  
