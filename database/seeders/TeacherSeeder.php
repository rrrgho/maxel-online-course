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
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'type' => 2,
                'name' => 'Fakhri',
                'specialist' => 'Administrator | Designer',
                'bio' => 'Administrator who own this platform, feel free to send me any feedback to make this platform better.'
            ],
            [
                'id' => 2,
                'email' => 'shandikagalih@unpas.com',
                'password' => bcrypt('admin'),
                'type' => 2,
                'name' => 'Sandhika Galih',
                'specialist' => 'Web Programmer',
                'bio' => 'I am web programmer with years of experience, I love to enable people through Web programmer lesson which will give much benefit to them.'
            ]
        ];

        foreach($teachers as $teacher){
            Teacher::create($teacher);
        }
    }
}
