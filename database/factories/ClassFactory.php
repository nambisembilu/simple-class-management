<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\Classes::class, function (Faker $faker) {
    $class_name = ['Elementary', 'Middle School', 'High School'];
    return [
        'name' => $class_name[rand(0, 2)],
        'level' => rand(1, 3),
        'year' => $faker->year($max = 'now')
    ];
});
