<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BasicClassPriceList;

class BasicClassPriceListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricelists = [
            [
                'id' => 1,
                'duration' => 6,
                'price' => 0,
            ],
            [
                'id' => 2,
                'duration' => 0,
                'price' => 0,
            ],
            [
                'id' => 3,
                'duration' => 10,
                'price' => 0,
            ],
        ];

        foreach($pricelists as $item){
            BasicClassPriceList::create($item);
        }
    }
}
