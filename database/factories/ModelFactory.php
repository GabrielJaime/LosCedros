<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(LosCedros\Models\Usuario::class, function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->nombre,
        'usuario' => $faker->usuario,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(LosCedros\Task::class, function (Faker\Generator $faker) {
    return [
        'name' => str_random(10),
        'photo' =>str_random(10),
    ];
});

