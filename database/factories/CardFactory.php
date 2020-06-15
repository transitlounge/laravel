<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
			'name' => $faker->word,
			'description' => $faker->sentence($nbWords = 25, $variableNbWords = false),
			'path' => '	images/cards/angel.jpg'
    ];
});
