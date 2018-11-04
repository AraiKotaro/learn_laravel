<?php

use Faker\Generator as Faker;

$factory->define(\App\Model\Todo2::class, function (Faker $faker) {
    return [
        'todo_date' => $faker->year . '/' . $faker->month . '/' . $faker->dayOfMonth,
        'contents' => $faker->paragraph,
    ];
});
