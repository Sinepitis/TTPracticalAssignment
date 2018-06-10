<?php

use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('GAMES')->insert([
            'team_id_1' => '1',
            'team_id_2' => '2',
            'tournament_id' => '1',
            'Team1_score' => '2',
            'Team2_score' => '3',
            'Description' => 'This game is one for the ages!',
            'date_of_game' => '2018-02-14'

        ]);
        DB::table('GAMES')->insert([
            'team_id_1' => '1',
            'team_id_2' => '3',
            'tournament_id' => '1',
            'Team1_score' => '1',
            'Team2_score' => '0',
            'Description' => 'In this game, the teams are equally matched',
            'date_of_game' => '2018-01-20'

        ]);
        DB::table('GAMES')->insert([
            'team_id_1' => '1',
            'team_id_2' => '4',
            'tournament_id' => '1',
            'Team1_score' => '0',
            'Team2_score' => '0',
            'Description' => 'Close game this is',
            'date_of_game' => '2018-05-12'

        ]);
        DB::table('GAMES')->insert([
            'team_id_1' => '2',
            'team_id_2' => '3',
            'tournament_id' => '1',
            'Team1_score' => '7',
            'Team2_score' => '2',
            'Description' => 'In the stadium tonight, meet the best young stars of our generation',
            'date_of_game' => '2017-12-09'

        ]);
        DB::table('GAMES')->insert([
            'team_id_1' => '2',
            'team_id_2' => '4',
            'tournament_id' => '1',
            'Team1_score' => '2',
            'Team2_score' => '4',
            'Description' => 'Canada..',
            'date_of_game' => '2016-05-25'

        ]);
        DB::table('GAMES')->insert([
            'team_id_1' => '3',
            'team_id_2' => '4',
            'tournament_id' => '1',
            'Team1_score' => '1',
            'Team2_score' => '1',
            'Description' => '/Raivis Kokins/ "Gatis Daukša, my best student"',
            'date_of_game' => '2018-06-11'

        ]);

    }
}
