<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $word=$this->faker->word;
        return [
            'name'=>$word,
            'slug'=>Str::slug($word),
        ];
});
