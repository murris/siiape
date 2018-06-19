<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}