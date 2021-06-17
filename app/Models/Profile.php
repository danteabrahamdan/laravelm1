<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model {
	
	use HasFactory;
	protected $fillable = ['biography', 'image_url', 'user_id'];

	// Relacion 1:1 inversa, un perfil asignado a un usuario
	public function user() {
		return $this->belongsTo(User::class, 'user_id');
	}
}
