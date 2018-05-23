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

$factory->define(App\Invoice::class, function (Faker\Generator $faker) {
    return [
        'amount' => $faker->numberBetween($min = 1,$max = 9999),
        'created_at' => $faker->dateTimeBetween($startDate = '-5 years', $endDate = 'now'),
        'customer_id' => $faker->randomElement(\App\Customer::pluck('id')->toArray()),
        'status_id' => $faker->randomElement(\App\Status::pluck('id')->toArray()),
        'is_active' => $faker->boolean,
    ];
});
