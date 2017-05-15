<?php

use App\Models\Alcohol;
use App\Models\Bundle;
use App\Models\Extra;
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
            'image' => 'blue_lagoon.png'
        ]);

        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Curaçao')->first());
        $bundle->extras()->save(Extra::where('name', 'Lime')->first());

        $bundle = Bundle::create([
            'name' => 'Tequila Sunrise',
            'description' => 'Some Tequila Sunrise description',
            'image' => 'tequila_sunrise.png'
        ]);

        $bundle->softs()->save(Soft::where('name', 'Orange Juce')->first());
        $bundle->softs()->save(Soft::where('name', 'Grenadine')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Tequila')->first());

        $bundle = Bundle::create([
            'name' => 'Mojito',
            'description' => 'Some Mojito description',
            'image' => 'mojito.png'
        ]);

        $bundle->softs()->save(Soft::where('name', 'Perrier')->first());
        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->softs()->save(Soft::where('name', 'Sugar Syrup')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Rhum')->first());
        $bundle->extras()->save(Extra::where('name', 'Lime')->first());
        $bundle->extras()->save(Extra::where('name', 'Sugar')->first());
        $bundle->extras()->save(Extra::where('name', 'Fresh Mint')->first());

        $bundle = Bundle::create([
            'name' => 'Cosmopolitan',
            'description' => 'Some Cosmopolitan description',
            'image' => 'cosmopolitan.png'
        ]);

        $bundle->softs()->save(Soft::where('name', 'Cranberries Juice')->first());
        $bundle->softs()->save(Soft::where('name', 'Lime Juice')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Vodka')->first());
        $bundle->alcohols()->save(Alcohol::where('name', 'Triple Sec')->first());
    }
}
