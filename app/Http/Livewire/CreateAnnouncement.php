<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class CreateAnnouncement extends Component
{
    
    public $title;
    public $description;
    public $price;
    public $detail;
    public $image;


    public function store(){

        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'detail'=>$this->detail,
            'image'=>$this->image,
            
        ]);

       
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}

//'title','price','description','detail','image','category_id'