<?php

namespace Database\Seeders;

use App\Benefit\Models\Benefit;
use Illuminate\Database\Seeder;

class BenefitsSeeder extends Seeder
{
    public function run(): void
    {
        $benefits = config('benefit.benefits');

        foreach ($benefits as $benefit) {
            Benefit::create($benefit);
        }
    }
}
