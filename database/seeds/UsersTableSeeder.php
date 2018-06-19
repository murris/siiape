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
    	$user = new App\User();

    	$user->name = 'kretco';
    	$user->email = 'admin@kretco.com';
    	$user->isAdmin = true;
    	$user->password  = bcrypt('secret');

    	$user->save();
        //
    }
}
