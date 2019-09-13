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
        //

        \DB::table('Users')->delete();

        \DB::table('Users')->insert(array (
            0 =>array(
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('Ivi888888'),
            ),
            1=>array(
                'name'=>'mobileguest',
                'email'=>'mobileguest@gmail.com',
                'password'=>bcrypt('mobileguest888?'),
            ),
            2=>array(
                'name'=>'A05admin',
                'email'=>'A05admin@gmail.com',
                'password'=>bcrypt('A05admin888?'),
            )
        ));


    }
}
