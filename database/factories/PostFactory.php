<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */



use Faker\Generator as Faker;
use League\CommonMark\Block\Element\Paragraph;
use App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
        'ID_U' => factory('App\User')->create(),
        'titre' => $faker->realText($maxNbChars = 20, $indexSize = 2),
        'contenu' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'dates' => $faker->dateTime($max = 'now', $timezone = null)
        
    ];
});
