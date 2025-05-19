<?php

namespace Database\Seeders;

use App\Address\Models\Barangay;
use App\Address\Models\City;
use Illuminate\Database\Seeder;

class BarangaySeeder extends Seeder
{
    public function run(): void
    {
        $query = City::whereName(config('address.cities')[0]);

        if (! $query->first()) {
            $this->call([
                CitySeeder::class,
            ]);
        }

        $city_id = $query->first()->id;

        $barangays = config('address.barangays.cagayan_de_oro');
        foreach ($barangays as $barangay) {
            Barangay::create([
                'city_id' => $city_id,
                'name' => $barangay,
            ]);
        }
    }
}
