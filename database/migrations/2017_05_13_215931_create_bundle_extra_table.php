<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('bundle_extra');

        Schema::create('bundle_extra', function (Blueprint $table) {
            $table->integer('bundle_id')->unsigned()->nullable();
            $table->integer('extra_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('bundle_extra', function($table) {
            $table->foreign('bundle_id')->references('id')->on('bundle');
            $table->foreign('extra_id')->references('id')->on('extra');
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
