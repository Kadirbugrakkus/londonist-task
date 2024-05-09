<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Turkey', 'code' => 'TR', 'phone_code' => '90'],
            ['name' => 'England', 'code' => 'EN', 'phone_code' => '44'],
            ['name' => 'Germany', 'code' => 'DE', 'phone_code' => '49'],
            ['name' => 'France', 'code' => 'FR', 'phone_code' => '33'],
            ['name' => 'Italy', 'code' => 'IT', 'phone_code' => '39'],
            ['name' => 'Spain', 'code' => 'ES', 'phone_code' => '34'],
            ['name' => 'Portugal', 'code' => 'PT', 'phone_code' => '351'],
            ['name' => 'Greece', 'code' => 'GR', 'phone_code' => '30'],
            ['name' => 'Russia', 'code' => 'RU', 'phone_code' => '7'],
            ['name' => 'USA', 'code' => 'US', 'phone_code' => '1'],
            ];

        foreach ($countries as $country) {
            Country::create($country);
        }
    }
}
