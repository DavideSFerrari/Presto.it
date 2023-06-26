<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annuncement extends Model
{
    use HasFactory;

    protected $fillable = ['title','price','description','detail','image'];
}