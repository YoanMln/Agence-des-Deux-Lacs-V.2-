<?php

namespace Database\Seeders;

use App\Models\LastOffer;
use Illuminate\Database\Seeder;

class LastOfferSeeder extends Seeder
{
    public function run(): void
    {

        LastOffer::create([
            'type' => 'Appartement',
            'location' => 'Aix-les-Bains',
            'rooms' => 4,
            'surface' => 150,
            'price' => 1000000,
            'image' => 'house-1.jpg'
        ]);

        LastOffer::create([
            'type' => 'Appartement',
            'location' => 'Veyrier-du-Lac',
            'rooms' => 5,
            'surface' => 233,
            'price' => 3900000,
            'image' => 'house-2.jpg'
        ]);

        LastOffer::create([
            'type' => 'Appartement',
            'location' => 'Chambéry',
            'rooms' => 5,
            'surface' => 215,
            'price' => 460000,
            'image' => 'house-3.jpg'
        ]);
    }
}
