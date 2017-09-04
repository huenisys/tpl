<?php

use Faker\Generator as Faker;

$factory->define(App\Huenisys\Tpl\Faqs::class, function (Faker $faker) {
    return [
          'question' => $faker->sentence,
          'answer' => $faker->paragraph
    ];
});
