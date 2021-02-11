<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionParentNameToHomeSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_section', function (Blueprint $table) {
            $table->string('parent_section_name');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_section', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
