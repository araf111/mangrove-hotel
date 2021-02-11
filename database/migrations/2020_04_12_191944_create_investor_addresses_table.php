<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->enum('type', ['Office', 'Mailing', 'Permanent']);
            $table->integer('country_id')->unsigned();
            $table->integer('division_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('thana_id')->unsigned();
            $table->string('area')->nullable();
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
        Schema::dropIfExists('investor_addresses');
    }
}
