<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItCentersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 5; $i++) {
            DB::table('it_centers')->insert([
                'name' => $faker->company . ' Trung tâm Tin học',
                'location' => $faker->address,
                'contact_email' => $faker->companyEmail,
            ]);
        }
    }
}
