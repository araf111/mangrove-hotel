<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->json('body')->default(new Expression('(JSON_ARRAY())'));
            $table->boolean('published')->default(1);
            $table->timestamps();

            $table->foreign('page_id')
					->references('id')
					->on('pages')
                    ->onDelete('cascade');


            $table->index('page_id');
            $table->index('section_id');
            $table->index('menu_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
