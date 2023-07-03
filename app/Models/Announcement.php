<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title','price','description','detail','image','category_id'];


public function category(){

    return $this->belongsTo(Category::class);
}

public function user(){

    return $this->belongsTo(User::class);
}

public function setAcepted($value){

    $this->is_accepted = $value;
    $this->save();
    return true;

}

public function toBeRevisionedCount(){
    return Announcement::where('is_accepted', NULL)->count();
}
}
