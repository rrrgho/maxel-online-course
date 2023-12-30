<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassCategory;

class ClassCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [   
                'id' => 1,
                'name' => 'Pemrograman Web',
            ],
            [   
                'id' => 2,
                'name' => 'Design Grafis',
            ],
            [   
                'id' => 3,
                'name' => 'UI/UX Design',
            ]
        ];

        foreach($categories as $category){
            ClassCategory::create($category);
        }
    }
}
