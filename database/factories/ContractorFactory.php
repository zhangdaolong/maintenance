<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
 */

$factory->define(App\Contractor::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName . ' ' . $faker->lastName,
        'description' => $faker->text,
        'phone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
        'is_active' => $faker->boolean,
    ];
});
