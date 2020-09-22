<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {
    return [
        'body'=>$this->faker->text,
        'question_id'=>function(){
         return App\Models\Question::all()->random();
       },
        'user_id'=>function(){
         return App\User::all()->random();
     }
     ];
});
