<?php

use Illuminate\Database\Seeder;

class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'shaun@shaunhare.co.uk',
            'password' => bcrypt('secret'),
        ]);
    }
}
