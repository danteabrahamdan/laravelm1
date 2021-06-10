<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model {
    
    use HasFactory;
    protected $fillable = [
        'isbn', 
        'title', 
        'abstract', 
        'img_url', 
        'author', 
        'year_of_publication', 
        'publisher_name'
    ];
}
