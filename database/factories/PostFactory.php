<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */



use Faker\Generator as Faker;
use League\CommonMark\Block\Element\Paragraph;
use App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
        'titre' => $faker->sentence,

        'contenu' => $faker->paragraph,

        'ID_U' => factory('App\User')->create()
    ];
});
