<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
      {

       DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'David  ',
            'Surname'=>'Sweeney',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);

        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'John  ',
            'Surname'=>'Slater',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '2',
            'lineup_id' => '1',
            'name' => 'Leroy  ',
            'Surname'=>'Bliss',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '2',
            'lineup_id' => '2',
            'name' => 'Christopher  ',
            'Surname'=>'Jimenez',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '3',
            'lineup_id' => '1',
            'name' => 'John  ',
            'Surname'=>'Richard',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '3',
            'lineup_id' => '2',
            'name' => 'Lonnie  ',
            'Surname'=>'Anthony',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '4',
            'lineup_id' => '1',
            'name' => 'Steven  ',
            'Surname'=>'Krauss',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '4',
            'lineup_id' => '2',
            'name' => 'Walter  ',
            'Surname'=>'Foote',
            'Position' => 'coach',
            'role'=>'coach',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Joshua ',
            'Surname'=>'Haines',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Matthew ',
            'Surname'=>'Myers',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'David ',
            'Surname'=>'Delay',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Edward ',
            'Surname'=>'Spencer',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'John ',
            'Surname'=>'Gleason',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Ron ',
            'Surname'=>'Martinez',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Andrew ',
            'Surname'=>'Beecham',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Jeffrey ',
            'Surname'=>'Wilson',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
/*----------------------------------------------------*/

        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Michael ',
            'Surname'=>'Bartlett',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Ramon ',
            'Surname'=>'Martin',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Pat ',
            'Surname'=>'Ratcliffe',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Richard ',
            'Surname'=>'Kendall',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Richard ',
            'Surname'=>'Borrelli',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Douglas',
            'Surname'=>'Pierson',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Gabriel ',
            'Surname'=>'Wigfall',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Frank',
            'Surname'=>'Howard',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
/*----------------------------------------------------*/

        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Clifton ',
            'Surname'=>'Lippincott',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Mark ',
            'Surname'=>'Wahl',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Eddie ',
            'Surname'=>'Delacruz',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Gregory',
            'Surname'=>'Milan',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Edwin ',
            'Surname'=>'Galloway',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Jermaine ',
            'Surname'=>'Prindle',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Anthony',
            'Surname'=>'Dobson',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Jeffrey',
            'Surname'=>'Wilder',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
/*----------------------------------------------------*/

        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Mark',
            'Surname'=>'Gil',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Luis',
            'Surname'=>'Kuhns',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Joseph',
            'Surname'=>'Swink',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '1',
            'name' => 'Michael',
            'Surname'=>'Simonetti',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'James',
            'Surname'=>'McIntyre',
            'Position' => 'center',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Billy',
            'Surname'=>'Story',
            'Position' => 'Farward',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Robert',
            'Surname'=>'Fish',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
        DB::table('participant')->insert([
          'team_id' => '1',
            'lineup_id' => '2',
            'name' => 'Thomas',
            'Surname'=>'Harriss',
            'Position' => 'Defenceman',
            'role'=>'player',
            'first_joined_team' =>'1985-12-25'
        ]);
/*----------------------------------------------------*/
    }
}
