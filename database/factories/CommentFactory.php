<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create(),
        'post_id' => factory('App\Post')->create(),
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null),
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
    ];
});
