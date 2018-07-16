<?php

use Faker\Generator as Faker;

$factory->define(App\Profession::class, function (Faker $faker) {
    return [
        'profession' => $faker->sentence,
        ];
        
});
