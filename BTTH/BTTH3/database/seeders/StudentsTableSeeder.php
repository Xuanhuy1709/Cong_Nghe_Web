<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $classIDs = DB::table('classes')->pluck('id')->toArray();

        // Seed dữ liệu cho bảng students
        for ($i = 0; $i < 20; $i++) {
            DB::table('students')->insert([
                'first_name' => $faker->randomElement(['Trịnh','Phạm','Nguyễn','Trần']),
                'last_name' => $faker->randomElement(['Minh','Thảo','Huy','Hải']),
                'date_of_birth' => $faker->date('Y-m-d', '-6 years'),
                'parent_phone' => $faker->numerify('0#########'),
                'class_id' => $faker->randomElement($classIDs),
            ]);
        }
    }
}
