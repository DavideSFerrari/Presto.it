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

        Announcement::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'detail'=>$this->detail,
            'image'=>$this->image,
            ]);
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