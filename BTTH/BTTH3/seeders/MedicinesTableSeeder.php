<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Seed medicines
        for ($i = 0; $i < 20; $i++) {
            DB::table('medicines')->insert([
                'name' => $faker->randomElement(['Paracetamol','Amoxicillin','Insulin','Vitamin C']),
                'brand' => $faker->randomElement(['Hapacol','Augmentin ','Lantus','Effervescent']),
                'dosage' => $faker->randomElement(['10mg tablets', '5mg capsules', '20mg syrup']),
                'form' => $faker->randomElement(['tablet', 'capsule', 'syrup']),
                'price' => $faker->randomFloat(2, 5, 100),
                'stock' => $faker->numberBetween(10, 200),
            ]);
        }
    }
}
