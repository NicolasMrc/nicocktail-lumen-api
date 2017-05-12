<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleAlcoholTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('alcohol_bundle');

        Schema::create('alcohol_bundle', function (Blueprint $table) {
            $table->integer('bundle_id')->unsigned()->nullable();
            $table->integer('alcohol_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('alcohol_bundle', function($table) {
            $table->foreign('bundle_id')->references('id')->on('bundle');
            $table->foreign('alcohol_id')->references('id')->on('alcohol');
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
