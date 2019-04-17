<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGongzhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gongzhangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job');
            $table->string('jobtime');
            $table->string('studio');
            $table->string('case_count');
            $table->text('dream');
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
        Schema::dropIfExists('gongzhangs');
    }

}
