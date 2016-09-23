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
            $table->biginteger('pin')->unique();
            $table->string('serial_no')->unique();
            $table->float('initial_value');
            $table->float('current_value');
            $table->integer('assigned_to')->null();
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
