<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model {
	
	use HasFactory;
	protected $fillable = ['type'];

	// Relación 1:N directa, donde un role es asignado a muchos usuarios
	public function users() {
		return $this->hasMany(User::class, 'role_id');
	}
}
