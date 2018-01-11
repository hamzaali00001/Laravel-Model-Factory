<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'description' => $faker->text(),
        'user_id' => factory('App\User')->create()->id,
    ];
});

$factory->state(App\User::class, 'active', function() {
    return [
        'is_active' => true,
    ];
});

$factory->state(App\User::class, 'featured', function() {
    return [
        'is_featured' => true,
    ];
});