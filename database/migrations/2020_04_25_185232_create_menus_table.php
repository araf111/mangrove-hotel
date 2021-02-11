<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('page_id')
					->references('id')
					->on('pages')
                    ->onDelete('cascade');

            $table->foreign('section_id')
					->references('id')
					->on('sections')
                    ->onDelete('cascade');

            $table->index('page_id');
            $table->index('section_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
