<?php

use Illuminate\Database\Seeder;

class LineupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('lineup')->insert([
          'team_id' => '2',
          'Name' => 'First'
      ]);
        DB::table('lineup')->insert([
            'team_id' => '2',
            'Name' => 'Second'
        ]);
          DB::table('lineup')->insert([
              'team_id' => '2',
              'Name' => 'First'
          ]);
            DB::table('lineup')->insert([
                'team_id' => '2',
                'Name' => 'Second'
            ]);
            DB::table('lineup')->insert([
                'team_id' => '3',
                'Name' => 'First'
            ]);
              DB::table('lineup')->insert([
                  'team_id' => '3',
                  'Name' => 'Second'
              ]);
              DB::table('lineup')->insert([
                  'team_id' => '4',
                  'Name' => 'First'
              ]);
                DB::table('lineup')->insert([
                    'team_id' => '4',
                    'Name' => 'Second'
                ]);
    }
}
