<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->string('phone')->nullable();
            $table->string('mobile')->unique();
            $table->string('emergency_contact')->nullable();
            $table->string('email_primary')->nullable();
            $table->string('email_secondary')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('identification_number')->nullable();
            $table->string('religion', 100)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('father_name', 150)->nullable();
            $table->string('mother_name', 150)->nullable();
            $table->string('spouse_name', 150)->nullable();
            $table->date('spouse_date_of_birth')->nullable();
            $table->string('occupation', 150)->nullable();
            $table->string('designation', 150)->nullable();
            $table->string('company_name', 150)->nullable();            
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
        Schema::dropIfExists('investor_profiles');
    }
}
