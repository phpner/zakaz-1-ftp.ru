<?php

use Illuminate\Database\Seeder;
use App\About_uses;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(\about_uses::class);

	    DB::table('users')->insert([
		    'name' => "admin",
		    'email' => 'admin@admin.ru',
		    'password' => bcrypt('123456'),
	    ]);
    }
}
