<?php

use Faker\Generator;

namespace App\Providers\FakerProviders;

class FoodProvider extends \Faker\Provider\Base
{

    public static function ingredientName()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\fr_FR\Restaurant($faker));

        return $faker;
    }
}
