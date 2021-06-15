<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder {
	
	public function run() {
		User::create([
			'name' => 'Dante Abraham',
			'email' => 'dante@correo.com',
			'password' => Hash::make('12345678'),
			'url' => 'https://github.com',
			'role_id' => 1
		]);

		User::create([
			'name' => 'Dante Abraham 2',
			'email' => 'dante2@correo.com',
			'password' => Hash::make('12345678'),
			'url' => 'https://github.com',
			'role_id' => 2
		]);
	}
}
