<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleSoftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('bundle_soft');

        Schema::create('bundle_soft', function (Blueprint $table) {
            $table->integer('bundle_id')->unsigned()->nullable();
            $table->integer('soft_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('bundle_soft', function($table) {
            $table->foreign('bundle_id')->references('id')->on('bundle');
            $table->foreign('soft_id')->references('id')->on('soft');
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
