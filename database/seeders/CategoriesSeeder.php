<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder {
	
	public function run() {
		DB::table('category_books')->insert([
			'category_name' => 'Autobiografia',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Cientifico',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Aventura',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Cuentos',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Comedia',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Historia',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Salud',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Suspenso',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Tecnologia',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Drama',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Novelas',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		DB::table('category_books')->insert([
			'category_name' => 'Infantiles',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
	}
}
