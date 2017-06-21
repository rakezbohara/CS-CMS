<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);*/
        for($i=0;$i<10;$i++){
            DB::table('blogposts')->insert([
                'title' => str_random(40),
                'content' => str_random(200),
                'pubdate' => '2017-05-12',
            ]);

        }

    }
}
