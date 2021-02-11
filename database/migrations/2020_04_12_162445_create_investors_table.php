<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('investor_id')->unique();
            $table->integer('project_id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture')->nullable();
            $table->string('membership')->nullable();
            $table->boolean('active')->default(1);
            $table->timestamp('activated_at', 0);
            $table->integer('activate_by')->unsigned();
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();

            $table->foreign('project_id')
					->references('id')
					->on('projects')
                    ->onDelete('cascade');
                    
            $table->foreign('activate_by')
					->references('id')
					->on('users')
                    ->onDelete('cascade');
                    
            $table->index('investor_id');
            $table->index('project_id');
            $table->index('activate_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investors');
    }
}
