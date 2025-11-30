<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Guidance;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create sample students
        Student::create([
            'name' => 'Ahmet Yılmaz',
            'email' => 'ahmet@example.com',
            'password' => bcrypt('123456'),
            'school_class' => '12. Sınıf',
            'target_department' => 'Tıp Fakültesi',
            'phone' => '+90 555 123 4567',
            'address' => 'İstanbul, Türkiye'
        ]);

        // Create sample teachers
        Teacher::create([
            'name' => 'Ayşe Demir',
            'email' => 'ayse@example.com',
            'password' => bcrypt('123456'),
            'department' => 'Matematik',
            'phone' => '+90 555 987 6543',
            'bio' => '10 yıllık matematik öğretmeni'
        ]);

        // Create sample guidance counselors
        Guidance::create([
            'name' => 'Mehmet Korkmaz',
            'email' => 'mehmet@example.com',
            'password' => bcrypt('123456'),
            'department' => 'Rehberlik',
            'phone' => '+90 555 456 7890',
            'bio' => '15 yıllık rehberlik uzmanı'
        ]);
    }
}