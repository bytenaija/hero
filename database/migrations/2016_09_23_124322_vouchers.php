<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('voucher_id')->unsigned();
            $table->integer('assigned_to', null)->unsigned();
            $table->biginteger('pin')->unsigned();
            $table->float('initial_value')->unsigned();
            $table->float('current_value')->unsigned();
            $table->string('serial');
         //   $table->foreign('assigned_to')->references('beneficiary')->on('beneficiary_id')->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::dropIfExists('Vouchers');
    }
}
