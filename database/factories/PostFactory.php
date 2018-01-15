<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id'           => 1,
        'title'             => $faker->sentence,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->paragraph,
        'featured_image'    => $faker->imageUrl(770, 343),
        'post_type'         => rand(1, 2),
    ];
});
