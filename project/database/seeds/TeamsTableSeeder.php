<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            'team_name' => 'Toronto Maple Leafs',
            'league_id' => '1',
            'team_description' => 'The Toronto Maple Leafs (officially the Toronto Maple Leaf Hockey Club) are a professional ice hockey team based in Toronto, Ontario. They are members of the National Hockey Leagues Atlantic Division in the Eastern Conference. The club is owned by Maple Leaf Sports & Entertainment, Ltd. and are represented by Chairman Larry Tanenbaum. With an estimated value of US $1.4 billion in 2017 according to Forbes, the Maple Leafs are the second most valuable franchise in the NHL, after the New York Rangers.',
            'created_on'=>'1972-09-21'
        ]);
        DB::table('team')->insert([
            'team_name' => 'Washington Capitals',
            'league_id' => '1',
            'team_description' => 'The Washington Capitals are a professional ice hockey team based in Washington, D.C. They are members of the Metropolitan Division of the Eastern Conference of the National Hockey League (NHL). The Capitals are owned by Monumental Sports & Entertainment, headed by Ted Leonsis',
            'created_on' => '1924-01.01'
        ]);
        DB::table('team')->insert([
            'team_name' => 'Avangard Omsk',
            'league_id' => '2',
            'team_description' => 'Hockey Club Avangard (Russian: ХК Авангард, Vanguard), a.k.a. Avangard Omsk, are a Russian professional ice hockey team from Omsk. They are members of the Chernyshev Division of the Kontinental Hockey League (KHL).',
            'created_on' => '1976-12-24'
        ]);
        DB::table('team')->insert([
            'team_name' => 'Barys Astana',
            'league_id' => '2',
            'team_description' => 'Barys Hockey Club (Kazakh: Barys Hokkej Kluby), commonly referred to as Barys Astana or simply Barys, is a professional ice hockey team based in Astana, Kazakhstan. It is one of the founding members of the Kontinental Hockey League (KHL).',
            'created_on' => '1999-09-13'
        ]);
    }
}
