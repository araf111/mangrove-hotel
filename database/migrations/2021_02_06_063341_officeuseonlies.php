<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Officeuseonlies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officeuseonlies', function (Blueprint $table) {
            $table->id();
            $table->integer('investor_id')->unsigned();
            $table->string('payment_shedule_mode');
            $table->string('num_slot_share');
            $table->string('stay_day');
            $table->string('stay_night');
            $table->string('down_payment');
            $table->string('emi_number');
            $table->string('emi_amount');
            $table->string('money_receipt_no');
            $table->string('installment_date');
            $table->string('dealing_person');
            $table->string('dealing_person_designation');
            $table->string('dealing_person_office_id');
            $table->string('owner_id_no');
            $table->string('special_note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
