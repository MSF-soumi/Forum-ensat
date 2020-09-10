<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
