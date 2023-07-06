<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class CreateAnnouncement extends Component
{
    use WithFileUploads;


    public $title;
    public $description;
    public $price;
    public $detail;
    public $temporary_images;
    public $images= [];
    public $image;
    public $category;

    protected $rules =[
        'title'=> 'required|min:3',
        'description'=>'required|min:20',
        'price'=>'required|numeric',
        'detail'=>'',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=> 'image|max:1024',

    ];

    protected $messages=[
        'required'=>'Il campo :attribute è obbligatorio',
        'min'=>'Il campo :attribute non soddisfa i criteri',
        'numeric'=>'Il campo :attribute dev\'essere un numero',
        'temporary_images.required'=>'L\'immagine è richiesta',
        'temporary_images.*.image'=>'I file devono essere immagini',
        'temporary_images.*.max'=>'L\'immagine deve essere massimo di 1 mb',
        'images.image'=>'L\'immagine deve essere un\'immagine',
        'images.max'=>'L\'immagine deve essere massimo di 1 mb',
    ];

    public  function updateTemporaryImages()
{
    if ($this->validate([
         'temporary_images.*'=>'image|max:1024',
    ])) {
        foreach ($this->temporary_images as $image){
            $this->images[]= $image;
        }
    }
}

public function removeImage($key)
{
    if (in_array($key, array_keys($this->images))) {
        unset($this->images[$key]);
}
}

    public function store(){

    $this->validate();
    
        $category = Category::find($this->category);

        

        $announcement = $category->announcements()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'detail'=>$this->detail,
            'image'=>$this->image,
            ]);


            Auth::user()->announcements()->save($announcement);
            session()->flash('message', 'Annuncio inserito con successo');
            $this->cleanForm();
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function cleanForm(){
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->detail = '';
        $this->image = '';
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}

//'title','price','description','detail','image','category_id'