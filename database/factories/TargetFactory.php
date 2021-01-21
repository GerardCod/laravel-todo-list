<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Target;
use Faker\Generator as Faker;

$factory->define(Target::class, function (Faker $faker) {
    return [
        //
        'name' => $this->faker->name(),
        'ranking' => $this->faker->randomDigit()
    ];
});
