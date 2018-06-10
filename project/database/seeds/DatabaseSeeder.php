<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		DB::table('league')->insert([
		'name'=>'National Hockey League',
		'description'=>'The National Hockey League is a professional ice hockey league in North America, currently comprising 31 teams: 24 in the United States and 7 in Canada. ',
		'created_on'=>'1917.11.26',
		]);
		DB::table('league')->insert([
		'name'=>'Kontinental Hockey League',
		'description'=>'The Kontinental Hockey League (KHL) is an international professional ice hockey league founded in 2008. It comprises 27 member clubs based in Belarus, China, Finland, Kazakhstan, Latvia, Russia, and Slovakia.',
		'created_on'=>'2008.02.01.',
		]);
    /*$this->call([
    TeamsTableSeeder::class,
    LineupTableSeeder::class,
    PlayersTableSeeder::class,
  ]);*/
    /*
    $this->call([
    LineupTableSeeder::class,
    ]);
    $this->call([
    PlayersTableSeeder::class,
    ]);
    */
    }
}
