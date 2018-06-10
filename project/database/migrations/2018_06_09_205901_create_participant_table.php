<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant', function (Blueprint $table) {
            $table->increments('participant_id');
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('lineup_id');
            $table->string('name');
            $table->string('surname');
            $table->string('position');
            $table->string('role');
            $table->date('first_joined_team');

            $table->foreign('team_id')->references('team_id')->on('team');
            $table->foreign('lineup_id')->references('lineup_id')->on('lineup');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant');
    }
}
