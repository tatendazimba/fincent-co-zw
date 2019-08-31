<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env("DB_DEV_CONNECTION"))->create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('account');
            $table->timestamp('registration_date');
            $table->timestamp('last_use');
            $table->string('landline');
            $table->string('cellphone');
            $table->string('street');
            $table->string('suburb');
            $table->string('city');
            $table->string('type');
            $table->string('company_name');
            $table->string('category_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::dropIfExists('agents');
    }
}
