<?php

use Illuminate\Database\Seeder;

class ExtraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra')->insert([
            'name' => 'Cocktail Umbrella',
            'price' => '0.1',
        ]);
        DB::table('extra')->insert([
            'name' => 'Party Cup',
            'price' => '0.1',
        ]);
        DB::table('extra')->insert([
            'name' => 'Shooters',
            'price' => '0.1',
        ]);
        DB::table('extra')->insert([
            'name' => 'Ping Pong Ball',
            'price' => '0.1',
        ]);
    }
}
