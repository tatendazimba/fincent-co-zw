<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("_from", 16);
            $table->string("_to", 16);
            $table->double("rate");
            $table->double("from_amount");
            $table->double("to_amount");
            $table->string("type");
            $table->string("status");
            $table->string("purpose");
            $table->bigInteger("customer_id")->nullable();
            $table->bigInteger("rate_id");
            $table->timestamps();

            $table->string("user");

            $table->foreign('user')->references('email')->on('users');
            $table->foreign('_from')->references('code')->on('currencies');
            $table->foreign('_to')->references('code')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
