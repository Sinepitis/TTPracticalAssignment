<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'user5',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'user6',
            'email' => 'user6@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'user7',
            'email' => 'user7@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'user8',
            'email' => 'user8@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'user9',
            'email' => 'user9@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 1,
        ]);
		DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
			'role' => 4,
        ]);
    }
}
