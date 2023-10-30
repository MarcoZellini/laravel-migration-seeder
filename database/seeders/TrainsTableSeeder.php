<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 90; $i++) {
            $train = new Train();
            $train->company = $faker->company();
            $train->departure_point = $faker->city();
            $train->arrival_point = $faker->city();
            $train->departure_date_time = $faker->dateTimeInInterval('now', '+10 days');
            $train->arrival_date_time = $faker->dateTimeInInterval($train->departure_date_time, '+3 days');
            $train->train_code = $faker->bothify('??###??');
            $train->wagon_number = $faker->numberBetween(1, 10);
            $train->save();
        }
    }
}
