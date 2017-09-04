<?php

use Illuminate\Database\Seeder;
use Huenisys\Tpl\Database\UserSeeder;
use Huenisys\Tpl\Database\FaqsSeeder;

class TplSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TplUserSeeder::class);
        $this->call(TplFaqsSeeder::class);
    }
}
