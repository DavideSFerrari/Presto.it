<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    
    public $title;
    public $description;
    public $price;
    public $detail;
    public $image;
    public $category;

    protected $rules =[
        'title'=> 'required|min:3',
        'description'=>'required|min:20',
        'price'=>'required|numeric',
        'detail'=>'',
    ];

    protected $messages=[
        'required'=>'Il campo :attribute è obbligatorio',
        'min'=>'Il campo :attribute non soddisfa i criteri',
        'numeric'=>'Il campo :attribute dev\'essere un numero',
    ];


    public function store(){

    $this->validate();
    dd($this->category);
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