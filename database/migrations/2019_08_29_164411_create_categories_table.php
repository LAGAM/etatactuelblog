<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 50);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}