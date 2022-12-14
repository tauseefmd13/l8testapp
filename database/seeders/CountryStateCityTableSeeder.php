<?php

namespace Database\Seeders;

use App\Models\{Country, State, City};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CountryStateCityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryJson = File::get("database/data/countries.json");
        $countryData = json_decode($countryJson, true);

        foreach ($countryData['countries'] as $obj) {
            Country::create([
                'sortname' => $obj['sortname'],
                'name' => $obj['name'],
                'phonecode' => $obj['phoneCode']
            ]);
        }

        $stateJson = File::get("database/data/states.json");
        $stateData = json_decode($stateJson, true);

        foreach ($stateData['states'] as $obj) {
            State::create([
                'name' => $obj['name'],
                'country_id' => $obj['country_id']
            ]);
        }

        $cityJson = File::get("database/data/cities.json");
        $cityData = json_decode($cityJson, true);

        foreach ($cityData['cities'] as $obj) {
            City::create([
                'name' => $obj['name'],
                'state_id' => $obj['state_id']
            ]);
        }
    }
}
