<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
	return [
			'title' => $faker->sentence(2, true),
			'description' => $faker->sentence,
			'actors' => $faker->name,
			'category_id' => function () {
				return Category::all()->random();
			}
	];
});
