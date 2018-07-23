<?php

use Illuminate\Database\Seeder;
use App\Page;
use Faker\Factory;

class MebelSeeder extends Seeder
{
	private $faker;

	public function __construct()
	{
		$this->faker =  Factory::create('ru_RU');

	}

	public function run()
    {
    	$i = 0;
    	while ($i <= 100)
	    {
	    	$i++;
		    Page::create([
			    'title' => $this->faker->words(random_int(1,8), true),
			    "descr" => $this->faker->sentence(random_int(1,15), true),
			    'cate' => $this->faker->randomElement(['divan','ugl-divan','kreslo-krovat','kreslo-relax']),
			    'file_url' => $this->faker->imageUrl(),
			    'price' => $this->faker->numberBetween($min = 1000, $max = 9000)
		    ]);
	    }

    }
}
