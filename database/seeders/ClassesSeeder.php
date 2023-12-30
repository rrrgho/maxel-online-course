<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassModel;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                'title' => 'Belajar Dasar Pemrograman Web',
                'subtitle' => 'Dasar pemrograman web dengan HTML dan CSS',
                'description' => 'Pengenalan web dasar untuk pemula, belajar 3 bulan langsung bisa kerja freelanch sebagai web programmer, materi ini sudah disesuaikan dengan industry digital di era saat ini.',
                'image' => 'https://img.pikbest.com/origin/06/44/25/54MpIkbEsTKsH.jpg!w700wp',
                'type' => 1,
                'category_id' => 1,
                'teacher_id' => 1,
            ]
        ];

        foreach($classes as $class){
            ClassModel::create($class);
        }

    }
}
