<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorNomineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_nominees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->string('nominee_name');
            $table->string('nominee_mobile')->nullable();
            $table->string('relation')->nullable();
            $table->string('nominee_identity_number')->nullable();
            $table->timestamps();

            $table->foreign('investor_id')
                ->references('id')
                ->on('investors')
                ->onDelete('cascade');

            $table->index('investor_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investor_nominees');
    }
}
