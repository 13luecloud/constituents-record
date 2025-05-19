<?php

namespace Database\Seeders;

use App\Address\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public function run(): void
    {
        $cities = config('address.cities');

        foreach ($cities as $city) {
            City::create([
                'name' => $city,
                'province' => 'Misamis Oriental',
            ]);
        }
    }
}
