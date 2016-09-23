<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("admin_users", function(Blueprint $table){
            $table->increments('id');
            $table-> string('Firstname');
            $table-> string('Lastname');
            $table-> string('email')->unique();
            $table-> string('password', 100);
            $table-> string('phone_number');
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
        Schema::drop('admin_users');
    }
}
