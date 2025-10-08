<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Guardian;
use Illuminate\Database\Seeder;
use App\Models\Student;       
use App\Models\Classroom;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(GuardianSeeder::class);

        Classroom::factory(6)
            ->hasStudents(5)
            ->create();
    }
}
