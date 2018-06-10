<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineup', function (Blueprint $table) {
            $table->increments('lineup_id');
            $table->unsignedInteger('team_id');
            $table->string('name');
            $table->unsignedInteger('p_id_1')->unique();
            $table->unsignedInteger('p_id_2')->unique();
            $table->unsignedInteger('p_id_3')->unique();
            $table->unsignedInteger('p_id_4')->unique();
            $table->unsignedInteger('p_id_5')->unique();

            $table->foreign('team_id')->references('team_id')->on('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lineup');
    }
}
