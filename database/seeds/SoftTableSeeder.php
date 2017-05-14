<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soft')->insert([
            'name' => 'Coca-cola',
            'type' => 'Soda',
        ]);
        DB::table('soft')->insert([
            'name' => 'Soda Club',
            'type' => 'Soda',
        ]);
        DB::table('soft')->insert([
            'name' => 'Grenadine',
            'type' => 'Syrup',
        ]);
        DB::table('soft')->insert([
            'name' => 'Sugar Syrup',
            'type' => 'Syrup',
        ]);
        DB::table('soft')->insert([
            'name' => 'Sprite',
            'type' => 'Soda',
        ]);
        DB::table('soft')->insert([
            'name' => 'Perrier',
            'type' => 'Sparkling Water',
        ]);
        DB::table('soft')->insert([
            'name' => 'Orange Juce',
            'type' => 'Juce',
        ]);
        DB::table('soft')->insert([
            'name' => 'Lime Juice',
            'type' => 'Juice',
        ]);
        DB::table('soft')->insert([
            'name' => 'Cranberries Juice',
            'type' => 'Juice',
        ]);
    }
}
