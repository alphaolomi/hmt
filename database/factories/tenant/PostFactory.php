<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tenant\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'body' => $faker->text(100),
    ];
});
