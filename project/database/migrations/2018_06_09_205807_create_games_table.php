<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('game_id');
            $table->unsignedInteger('team_id_1');
            $table->unsignedInteger('team_id_2');
            $table->unsignedInteger('tournament_id')
            $table->smallInteger('Team1_score');
            $table->smallInteger('Team2_score');
            $table->smallInteger('position');
            $table->string('description');
            $table->date('date_of_game');

            $table->foreign('tournament_id')->references('tournament_id')->on('tournament');
            $table->foreign('team_id_1')->references('team_id')->on('team');
            $table->foreign('team_id_2')->references('team_id')->on('team');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
