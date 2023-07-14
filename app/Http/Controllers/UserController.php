<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
        public function index(){
           
            $categories = Category::all();
            if(Auth::user()){
                $announcements = Announcement::where('user_id', Auth::user()->id)->get();
                
    
            }
    
    
            return view('user_profile.index', compact('categories', 'announcements'));
    
        }
    
        public function edit(){
            $announcements = Announcement::all();
            $categories = Category::all();
            return view('user_profile.edit', compact('announcements', 'categories', ));
        }
    
        public function destroy(User $user){
            $user = Auth::user();
            $user->delete();
            return redirect()->route('homepage')->with('success', 'Cancellazione account avvenuta');
        }
}
