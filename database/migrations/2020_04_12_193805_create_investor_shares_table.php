<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorSharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_shares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_id')->unsigned();
            $table->integer('share_id')->unsigned();
            $table->integer('share_number');
            $table->decimal('grand_total', 13, 2);
            $table->decimal('booking_amount', 8, 2);
            $table->decimal('installment_amount', 8, 2);
            $table->integer('installment_number'); //36
            $table->timestamps();

            $table->foreign('investor_id')
                ->references('id')
                ->on('investors')
                ->onDelete('cascade');
            $table->foreign('share_id')
                ->references('id')
                ->on('shares')
                ->onDelete('cascade');

            $table->index('investor_id');
            $table->index('share_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investor_shares');
    }
}
