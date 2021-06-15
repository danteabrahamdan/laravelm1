<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateBooksTable extends Migration {

	public function up() {
		Schema::create('category_books', function (Blueprint $table) {
			$table->id();
			$table->string('category_name')->unique();
			$table->timestamps();
		});

		Schema::create('books', function (Blueprint $table) {
			$table->id();
			$table->string('isbn')->unique();
			$table->string('title');
			$table->text('abstract')->nullable();
			$table->string('img_url')->nullable();
			$table->string('author')->nullable();
			$table->integer('year_of_publication')->nullable();
			$table->string('publisher_name')->nullable();
			$table->foreignId('user_id')->references('id')->on('users')->comment('al usuario al que pertenece este libro');
			$table->foreignId('category_id')->references('id')->on('category_books')->comment('La categoria a la que pertenece');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists('category_books');
		Schema::dropIfExists('books');
	}
}
