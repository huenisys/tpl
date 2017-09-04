<?php

use Illuminate\Database\Seeder;

class TplFaqsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('faqs')->insert([
            'question' => 'Paul',
            'answer' => 'paul@huenits.com'
        ]);
    }
}
