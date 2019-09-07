<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesTable extends Migration {

	public function up()
	{
		Schema::create('commentaires', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom_auteur_comment', 50);
			$table->longText('contenu');
			$table->integer('article_id')->unsigned();
			$table->foreign('article_id')->references('id')->on('articles')->onDelete('restrict')->onUpdate('restrict');
		});
	}

	public function down()
	{
		
        Schema::table('commentaires', function (Blueprint $table){
            $table->dropForeign('commentaires_article_id_foreign');
    });
		Schema::drop('commentaires');
	}
}