<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Book extends Model {

	use HasFactory;
	protected $fillable = ['isbn', 'title', 'abstract', 'img_url', 'author', 'year_of_publication', 'publisher_name', 'category_id', 'user_id'];

	// Relacion 1:1 inversa, a la categoria a la que pertenece este libro
	public function category() {
		return $this->belongsTo(CategoryBook::class, 'category_id');
	}

	// Relacion 1:1 inversa, al usuario al que pertenece este libro
	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}
}
