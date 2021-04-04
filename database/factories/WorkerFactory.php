<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Worker;
use Faker\Generator as Faker;

$factory->define(Worker::class, function (Faker $faker) {
    return [
        'position_id' => rand(1,3),
        'nama' => $faker->name(),
        'alamat' => $faker->sentence(),
        'no_hp' => $faker->sentence(),
    ];
});
