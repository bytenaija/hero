<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("beneficiary_id");
            $table->integer("vendor_id");
            $table->integer("voucher_no");
            $table->string("items");
            $table->float("amount");
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
        Schema::dropIfExists('Transactions');
    }
}
