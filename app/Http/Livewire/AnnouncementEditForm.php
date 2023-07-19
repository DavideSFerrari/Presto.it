<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnnouncementEditForm extends Component
{

    public $announcement;
    public $title;
    public $description;
    public $price;
    public $detail;
    public $temporary_images;
    public $images= [];
    public $category;

    public Announcement $announcements;

    public function __mount(){
        $this->title = $this->announcement->title;
        $this->description = $this->announcement->decription;
        $this->price = $this->announcement->price;
        $this->detail = $this->announcement->detail;
        $this->images = $this->announcement->images;
        $this->category = $this->announcement->category;
        
    }

    public function update(){
        $this->validate();
        $this->announcement->update([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'detail' => $this->detail,
            'images' => $this->images,
            'category' => $this->category,
        ]);

        
    }

    public function render()
    {
        return view('livewire.announcement-edit-form');
    }
}
