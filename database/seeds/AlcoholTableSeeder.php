<?php

use Illuminate\Database\Seeder;

class AlcoholTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alcohol')->insert([
            'name' => 'Vodka',
            'degree' => '40',
        ]);
        DB::table('alcohol')->insert([
            'name' => 'Gin',
            'degree' => '40',
        ]);
        DB::table('alcohol')->insert([
            'name' => 'Tequila',
            'degree' => '40',
        ]);
        DB::table('alcohol')->insert([
            'name' => 'Cognac',
            'degree' => '40',
        ]);
        DB::table('alcohol')->insert([
            'name' => 'Rhum',
            'degree' => '40',
        ]);
        DB::table('alcohol')->insert([
            'name' => 'Whisky',
            'degree' => '40',
        ]);

        DB::table('alcohol')->insert([
            'name' => 'Absinthe',
            'degree' => '69',
        ]);

        DB::table('alcohol')->insert([
            'name' => 'Curaçao',
            'degree' => '17',
        ]);

        DB::table('alcohol')->insert([
            'name' => 'Amarretto',
            'degree' => '40',
        ]);

        DB::table('alcohol')->insert([
            'name' => 'Triple Sec',
            'degree' => '35',
        ]);

    }
}
