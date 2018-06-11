<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('GAMES')->insert([
          'user_id' => '1',
          'game_id' => '1',
          'content' => 'What a game!',
          'flag_counter' => '0',
          'show_comment' => '1',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '2',
          'game_id' => '2',
          'content' => 'DUCK THIS GAME!',
          'flag_counter' => '9',
          'show_comment' => '0',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '3',
          'game_id' => '3',
          'content' => 'Did you see that?!',
          'flag_counter' => '2',
          'show_comment' => '1',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '4',
          'game_id' => '4',
          'content' => 'Fudge!',
          'flag_counter' => '7',
          'show_comment' => '0',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '5',
          'game_id' => '5',
          'content' => 'Someone, please give me a ticket!',
          'flag_counter' => '1',
          'show_comment' => '1',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '6',
          'game_id' => '6',
          'content' => 'GOOD GAME!',
          'flag_counter' => '5',
          'show_comment' => '0',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '7',
          'game_id' => '1',
          'content' => 'How do i use this thing?',
          'flag_counter' => '2',
          'show_comment' => '1',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '8',
          'game_id' => '2',
          'content' => 'Damn that goalie',
          'flag_counter' => '9',
          'show_comment' => '0',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '9',
          'game_id' => '3',
          'content' => 'I WAS THERE!',
          'flag_counter' => '1',
          'show_comment' => '1',
      ]);
      DB::table('GAMES')->insert([
          'user_id' => '1',
          'game_id' => '4',
          'content' => 'DUCK ME THIS SPORT IS STUPID',
          'flag_counter' => '1',
          'show_comment' => '1',
      ]);

    }
}
