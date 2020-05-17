<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogPost;
use Faker\Generator as Faker;

$factory->define(BlogPost::class, function (Faker $faker) {
    return [
        'post_title' => substr($faker->sentence(2), 0, -1),
        'post_body' => $faker->text,
        'description' => $faker->paragraph,
        'tags' => substr($faker->sentence(2), 0, -1),
        'status' => 1,
        'user_id' => App\User::all()->random()->id,
        
    ];
});
