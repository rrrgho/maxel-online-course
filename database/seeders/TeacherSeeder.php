<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'id' => 1,
                'email' => 'fakhri@maxelcourse.com',
                'password' => bcrypt('maxelCourseFMC24'),
                'type' => 2,
                'name' => 'Fakhri',
                'specialist' => 'Administrator',
                'bio' => 'Administrator who own this platform, feel free to send me any feedback to make this platform better.'
            ],
        ];

        foreach($teachers as $teacher){
            Teacher::create($teacher);
        }
    }
}
