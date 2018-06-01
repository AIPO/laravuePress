<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'author_id' => rand(1,10),
        'category_id' => rand(1,10),
        'title' => $title,
        'slug'=> str_slug($title),
        'body'=> $faker->paragraph(10),
        'featured'=> rand(0,1),
        'status' => $faker->randomElement(['published','draft']),
    ];
});
