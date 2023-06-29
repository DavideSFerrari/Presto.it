<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function detailCategory(Category $category) {
        $announcements = Announcement::all();
        return view('categories.detail', compact('category'), compact('announcements'));
    }

    public function categoryShow(Category $category){
        $announcements = Announcement::all();

        return view ('categories.detail', compact('category'), compact('announcements'));
    }
}
