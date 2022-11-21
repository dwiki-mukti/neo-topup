<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_vouchers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trx_detail_id');
            $table->string('redeem_code');
            $table->timestamps();

            
            $table->foreign('trx_detail_id')->references('id')->on('transaction_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_vouchers');
    }
}
