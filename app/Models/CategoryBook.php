<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CategoryBook extends Model {

	use HasFactory;
	protected $fillable = ['category_name'];

	// Relación 1:N directa, donde un categoria esta asignada a muchos libros
	public function books() {
		return $this->hasMany(Book::class, 'category_id');
	}
}
