<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Beneficiaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Beneficiaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('beneficiary_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->string('phone_number');
            $table->string('lga');
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('Beneficiaries');
    }
}
