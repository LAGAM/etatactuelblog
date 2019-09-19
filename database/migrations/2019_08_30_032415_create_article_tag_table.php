<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('article_id')->unsigned();

            $table->foreign('article_id')->references('id')->on('articles')->onDelete('restrict')->onUpdate('restrict');
            $table->integer('tag_id')->unsigned();
            
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('article_tag', function (Blueprint $table)
        {
                $table->dropForeign('article_tag_article_id_foreign');
        });

        Schema::table('article_tag', function (Blueprint $table)
        {
                $table->dropForeign('article_tag_tag_id_foreign');
        });


        Schema::dropIfExists('article_tag');
    }
}
