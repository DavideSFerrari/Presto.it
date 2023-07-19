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

    public function update()
    {
        $this->validate();
        $this->announcement->update([
            'title' => $this->title,
            'price' => $this->price,
            'category' => $this->category,
             'description' => $this->description,
        ]);

        
    if (count($this->images)){
        foreach ($this->images as $image){
            
            $newFileName = "announcements/{$this->announcement->id}";
            $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName,'public')]);
            
            RemoveFaces::withChain([
            new ResizeImage($newImage->path , 300 , 400),
            new GoogleVisionSafeSearch($newImage->id),
            new GoogleVisionLabelImage($newImage->id)
            ])->dispatch($newImage->id);
            
        }

        File::deleteDirectory(storage_path('/app/livewire-tmp'));
}

        $this->announcement->user()->associate(Auth::user());
        $this->announcement->save();

    public function render()

    {
        return view('livewire.announcement-edit-form');
    }
}
