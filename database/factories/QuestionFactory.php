<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    $title=$this->faker->sentence;
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'body'=>$this->faker->text,
            'category_id'=>function(){
              return App\Models\Category::all()->random();
            },
            'user_id'=>function(){
                return App\User::all()->random();
            }

        ];
});
