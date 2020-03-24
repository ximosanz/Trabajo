<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Editorial;
use Faker\Generator as Faker;

$factory->define(Editorial::class, function (Faker $faker) {
    $name = '';
    $aleatorio =rand(1, 4);
    if($aleatorio == 1){
        $name = 'SM';
    }
    if($aleatorio == 2){
        $name = 'Planeta';
    }
    if($aleatorio == 3){
        $name = 'Santillana';
    }
    if($aleatorio == 4){
        $name = 'Anaya';
    }
    return [    
        'name' => $name
    ];
});
