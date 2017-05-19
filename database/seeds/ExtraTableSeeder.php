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
            'name' => 'Sugar',
        ]);
        DB::table('extra')->insert([
            'name' => 'Limes',
        ]);
        DB::table('extra')->insert([
            'name' => 'Fresh Mint',
        ]);
    }
}
