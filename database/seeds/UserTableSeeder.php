<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();



        DB::table('users')->insert([
            [
                'id' => 1,
                'name'                 => 'tomato',
                'email'                 => 'tomato@example.com',
                'password'               => bcrypt('password'),
                'birthday' => '2000-08-26',
                'gender' => 'Woman',
                'memo' => 'Hello!',
                'created_at' => '2015-08-26 23:59:59',
                'updated_at' => '2015-08-26 23:59:59',
            ],
            [
                'id' => 2,
                'name'                 => 'cucumber',
                'email'                 => 'cucumber@example.com',
                'password'               => bcrypt('password'),
                'birthday' => '1995-05-25',
                'gender' => 'Man',
                'memo' => 'Bye!',
                'created_at' => '2015-08-26 23:59:59',
                'updated_at' => '2015-08-26 23:59:59',
            ],
        ]);

    }
}
