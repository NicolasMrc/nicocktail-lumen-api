<?php

use App\Models\Bundle;
use App\Models\User;
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
            'role' => 'admin',
            'api_token' => str_random(32),
        ]);
        DB::table('user')->insert([
            'firstname' => 'Seb Admin',
            'lastname' => 'Amdin',
            'email' => 'seb@nicolasmercier.io',
            'password' => '85adbd0ee8c89bdb7cc320e7a9f78833f741492d',
            'role' => 'admin',
            'api_token' => str_random(32),
        ]);
        DB::table('user')->insert([
            'firstname' => 'Camouille',
            'lastname' => 'Admin',
            'email' => 'camille@nicolasmercier.io',
            'password' => 'b920592808acec58c9833234ce6265ad888f29a6',
            'role' => 'admin',
            'api_token' => str_random(32),
        ]);
        $user = User::create([
            'firstname' => 'Nicolas',
            'lastname' => 'Mercier',
            'email' => 'nyckoo@live.fr',
            'password' => '418d940643b1975d62234ee01246ad4b58904184',
            'role' => 'user',
            'api_token' => '',
        ]);

        $user->cart()->save(Bundle::where('name', 'Blue Lagoon')->first());
    }
}
