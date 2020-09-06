<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Question;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Question::class, function (Faker $faker) {

    $title = $faker->sentence;

    return [
        'title' => $title,
        'body' => $faker->text,
        'slug' => Str::slug($title),
        'user_id' => function(){
            return User::all()->random();
        },
        'category_id' => function(){
           return Category::all()->random();
        }
    ];
});
