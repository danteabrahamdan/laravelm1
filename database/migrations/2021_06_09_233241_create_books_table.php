<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{

	public function up()
	{
		Schema::create('books', function (Blueprint $table) {
			$table->id();
			$table->string('isbn')->unique();
			$table->string('title');
			$table->text('abstract')->nullable();
			$table->string('img_url')->nullable();
			$table->string('author')->nullable();
			$table->integer('year_of_publication')->nullable();
			$table->string('publisher_name')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('books');
	}
}
