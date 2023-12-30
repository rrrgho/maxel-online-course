<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassUser;

class ClassUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class_users = [
            [
                'class_id' => 1,
                'user_id' => 1,
            ]
        ];

        foreach($class_users as $class_user){
            ClassUser::create($class_user);
        }

    }
}
