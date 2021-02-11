<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorSharePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_share_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('investor_share_id')->unsigned();
            $table->integer('investor_id')->unsigned();
            $table->integer('share_id')->unsigned();
            $table->decimal('amount', 13, 2);
            $table->integer('installment'); // default 1 will be inserted
            $table->string('bank_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('transaction_id')->nullable();
            $table->enum('payment_method', ['Cash', 'PO', 'DD', 'Cheque', 'Bank', 'Online'])->default('Cash');
            $table->enum('status', ['Paid', 'Due', 'NY', 'Failed'])->default('NY');
            $table->timestamps();

            $table->foreign('investor_share_id')
                ->references('id')
                ->on('investor_shares')
                ->onDelete('cascade');
            $table->foreign('investor_id')
                ->references('id')
                ->on('investors')
                ->onDelete('cascade');
            $table->foreign('share_id')
                ->references('id')
                ->on('shares')
                ->onDelete('cascade');

            $table->index('investor_share_id');
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
        Schema::dropIfExists('investor_share_payments');
    }
}
