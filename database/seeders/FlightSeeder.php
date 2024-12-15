<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        $flights = [
            [
                'flight_code' => 'GA901',
                'origin' => 'JKT',
                'destination' => 'DPS',
                'departure_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+1 month')
            ],
            [
                'flight_code' => 'SQ950',
                'origin' => 'CGK',
                'destination' => 'SIN',
                'departure_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+1 month')
            ],
            [
                'flight_code' => 'QF42',
                'origin' => 'SYD',
                'destination' => 'CGK',
                'departure_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+1 month')
            ],
            [
                'flight_code' => 'AF178',
                'origin' => 'CDG',
                'destination' => 'JKT',
                'departure_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+1 month')
            ],
            [
                'flight_code' => 'MH724',
                'origin' => 'KUL',
                'destination' => 'CGK',
                'departure_time' => $faker->dateTimeBetween('+1 week', '+1 month'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+1 month')
            ]
        ];

        foreach ($flights as $flight) {
            Flight::create($flight);
        }
    }
}
