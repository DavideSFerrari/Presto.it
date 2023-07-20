<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\RemoveFaces;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AnnouncementEditForm extends Component
{
    use WithFileUploads;

    public $announcement;
    public $title;
    public $description;
    public $price;
    public $detail;
    public $temporary_images;
    public $imagesFromDb;
    public $images= [];
    public $category;

    public Announcement $announcements;

    protected $rules =[
        'title'=> 'required|min:3',
        'description'=>'required|min:10',
        'price'=>'required|numeric',
        'detail'=>'',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',

    ];

    public function __mount(){
        $this->title = $this->announcement->title;
        $this->description = $this->announcement->decription;
        $this->price = $this->announcement->price;
        $this->detail = $this->announcement->detail;
        $this->images = $this->announcement->images;
        $this->category = $this->announcement->category->id;
        
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
        if (count($this->images)) {

            foreach ($this->images as $image) {
                $newFileName = "advs/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path' => $image->store($newFileName, 'public')]);

                dispatch(new ResizeImage($newImage->path, 300, 300));
                dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));
            }
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
    }
    $this->announcement->save();
    $this->announcement->setAccepted(null);

    $message = '';

    switch (session('locale')) {
        case 'en':
            $message = "Announcement successfully modified!";
            break;
        case 'fr':
            $message = "Announce modifié avec succès!";
            break;
        case 'es':
            $message = "Anuncio modificado satifactoriamente!";
            break;

        default:
            $message = 'Annuncio modificato con successo!';
            break;
    }

    return redirect()->route('user_profile.index')->with('success', $message);
}

    public function updatedTemporaryImages()
    {

    if ($this->validate([
        'temporary_images.*' => 'image|max:1024',
    ])) {
        foreach ($this->temporary_images as $image) {
            $this->images[] = $image;
        }
    }
    }

public function updated($propertyName)
{
    $this->validateOnly($propertyName);
}


    public function render()
    {
        return view('livewire.announcement-edit-form');
    }

    
}
