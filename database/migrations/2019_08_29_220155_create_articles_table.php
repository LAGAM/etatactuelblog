
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticlesTable extends Migration {

	public function up()
	{
		Schema::create('articles', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titre', 50);
			$table->longText('contenu');
			//$table->string('slug', 50);
			$table->string('chapeau');
			$table->string('image')->nullable();

			$table->boolean('enligne');
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
			$table->integer('categorie_id')->unsigned();
			$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('articles', function (Blueprint $table){
            $table->dropForeign('articles_user_id_foreign');
	 });
        Schema::table('articles', function(Blueprint $table){
             $table->dropForeign('articles_categorie_id_foreign');
    });
		Schema::drop('articles');
	}
}