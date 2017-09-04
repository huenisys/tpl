<?php

use Illuminate\Database\Seeder;

class TplUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::firstOrCreate([
            'name' => 'Paul',
            'email' => 'paul@huenits.com',
            'password' => bcrypt('password')
        ])->save();
    }
}
