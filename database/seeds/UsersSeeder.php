<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'David', 
        	'last' => 'Contreras', 
        	'email' => 'da.contrerasp@uniandes.edu.co', 
        	'password' => bcrypt('123456'),
            'imagen' => 'https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male-128.png'
        ]);

        User::create([
            'name' => 'David', 
            'last' => 'Gomez', 
            'email' => 'davgomez@gmail.com', 
            'password' => bcrypt('123456'),
            'imagen' => 'https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male-128.png'
        ]);

    }
}
