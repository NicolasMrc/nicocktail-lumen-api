<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('address');
        Schema::dropIfExists('order');

        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('road')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('address', function($table) {
            $table->foreign('user_id')->references('id')->on('user');
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
    }
}
