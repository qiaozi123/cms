<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('job');
            $table->string('avatar');
            $table->string('job_age');
            $table->string('style');
            $table->string('studio');
            $table->string('price');
            $table->string('dream');
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
        Schema::dropIfExists('designers');
    }
}
