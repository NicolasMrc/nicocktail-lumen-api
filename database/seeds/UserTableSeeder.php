<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@nicolasmercier.io',
            'password' => '418d940643b1975d62234ee01246ad4b58904184',
        ]);
        DB::table('user')->insert([
            'firstname' => 'Nicolas',
            'lastname' => 'Mercier',
            'email' => 'nyckoo@live.fr',
            'password' => '418d940643b1975d62234ee01246ad4b58904184',
        ]);
    }
}
