<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Movie;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
	return [
			'user_id' => function () {
				return User::all()->random();
			},

			'body' => $faker->sentence
	];
});
