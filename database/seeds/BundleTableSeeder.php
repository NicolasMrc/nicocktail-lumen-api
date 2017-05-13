<?php

use App\Models\Alcohol;
use App\Models\Bundle;
use App\Models\Soft;
use Illuminate\Database\Seeder;

class BundleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bundle = Bundle::create([
            'name' => 'Blue Lagoon',
            'description' => 'Some blue lagoon description',
        ]);

        $bundle->softs()->save(Soft::where('name', 'Lime Juce')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Curaçao')->first());

        $bundle = Bundle::create([
            'name' => 'Tequila Sunrise',
            'description' => 'Some Tequila Sunrise description',
        ]);

        $bundle->softs()->save(Soft::where('name', 'Orange Juce')->first());
        $bundle->softs()->save(Soft::where('name', 'Grenadine')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());

        $bundle = Bundle::create([
            'name' => 'Mojito',
            'description' => 'Some Mojito description',
        ]);

        $bundle->softs()->save(Soft::where('name', 'Lime Juce')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Curaçao')->first());

        $bundle = Bundle::create([
            'name' => 'Cosmopolitan',
            'description' => 'Some Cosmopolitan description',
        ]);

        $bundle->softs()->save(Soft::where('name', 'Lime Juce')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Curaçao')->first());
    }
}