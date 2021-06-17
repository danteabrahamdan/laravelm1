<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable {
	
	use HasFactory, Notifiable;
	protected $fillable = ['name', 'email', 'password', 'url', 'role_id'];
	protected $hidden = ['password', 'remember_token'];
	protected $casts = ['email_verified_at' => 'datetime'];

	// Relación 1:N directa, donde un usuario tiene muchos libros
	public function books() {
		return $this->hasMany(Book::class);
	}

	// Relacion 1:1 directa, un usuario tiene un perfil
	public function profile() {
		return $this->hasOne(Profile::class);
	}

	// Relacion 1:1 inversa, un usuario tiene un role asignado
	public function role() {
		return $this->belongsTo(Role::class, 'role_id');
	}
}
