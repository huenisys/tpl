<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TplFaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Huenisys\Tpl\Faqs::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);

        Huenisys\Tpl\Faqs::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);

        Huenisys\Tpl\Faqs::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph.'?',
        ]);

        Huenisys\Tpl\Faqs::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph.'?',
        ]);

        Huenisys\Tpl\Faqs::create([
          'question' => rtrim($faker->sentence,'.').'?',
          'answer' => $faker->paragraph,
        ]);
    }
}
