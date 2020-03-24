<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Place;
use Faker\Generator as Faker;
use App\Cdu;
use App\Editorial;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'author' => $faker->firstName(),
        'place_id'=> Place::all()->random(1)[0]->id,
        'editorial_id'=> Editorial::all()->random(1)[0]->id,
        'cdu'=> Cdu::all()->random(1)[0]->cdu
    ];
});
