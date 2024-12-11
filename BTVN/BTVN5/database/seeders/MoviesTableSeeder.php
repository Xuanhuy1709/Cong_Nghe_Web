<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $directors = ['Anthony và Joe Russo', 'Christopher Nolan', 'Steven Spielberg', 'James Cameron'];
        $movies = ['Avengers: Endgame', 'Inception', 'Jurassic Park', 'Avatar'];

        $it_cinemaIDs = DB::table('it_centers')->pluck('id')->toArray();
        // Giả lập 20 bộ phim
        for ($i = 0; $i < 20; $i++) {
            DB::table('movies')->insert([
                'title' => $faker->randomElement($movies),
                'director' => $faker->randomElement($directors),
                'release_date' => $faker->date('Y-m-d', 'now'),
                'duration' => $faker->numberBetween(90, 210), 
                'cinema_id' => $faker->randomElement($it_cinemaIDs),
            ]);
        }
    }
}
