<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('AlcoholTableSeeder');
        $this->call('SoftTableSeeder');
        $this->call('ExtraTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('BundleTableSeeder');
    }
}
