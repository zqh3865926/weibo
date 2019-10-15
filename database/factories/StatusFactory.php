<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'created_at' => $faker->date.' '.$faker->time,
        'updated_at' => $faker->date.' '.$faker->time,
    ];
});
