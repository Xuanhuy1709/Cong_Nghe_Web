<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $medicineID = DB::table('medicines')->pluck('medicine_id')->toArray();

        for ($i = 0; $i < 40; $i++) {
            DB::table('sales')->insert([
                'medicine_id' => $faker->randomElement($medicineID),
                'quantity' => $faker->numberBetween(10, 50),
                'sale_date' => $faker->dateTime(),
                'customer_phone' => $faker->numerify('0#########'),
            ]);
        }
    }
}
