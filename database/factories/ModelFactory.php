<?php

$factory->define(App\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->randomNumber(),
        'title' => $faker->word,
        'description' => $faker->text,
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
    ];
});

