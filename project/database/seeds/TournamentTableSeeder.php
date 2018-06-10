<?php

use Illuminate\Database\Seeder;

class TournamentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('team')->insert([
          'league_id' => '1',
          'Name' => 'Stanly Cup',
          'description' => 'The Stanley Cup is the championship trophy awarded annually to the National Hockey League playoff winner.',
          'created_on'=>'1972-09-21'
      ]);
    }
}
