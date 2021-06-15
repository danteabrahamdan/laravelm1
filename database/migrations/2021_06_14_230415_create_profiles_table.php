<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateProfilesTable extends Migration {
	
	public function up() {
		Schema::create('profiles', function (Blueprint $table) {
			$table->id();
			$table->text('biography')->nullable();
			$table->string('image_url')->nullable();
			$table->foreignId('user_id')->references('id')->on('users')->unique()->comment('El usuario al que pertenece el perfil');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists('profiles');
	}
}
