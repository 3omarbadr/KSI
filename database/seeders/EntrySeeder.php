<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Entry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Entry::factory()->count(5)->create();
        $cityName = City::pluck('name' );
        $cityId = City::pluck('id');

        Entry::insert([

            [
                "message" => "It is very hot in, $cityName[0] ",
                "sentiment" => "Neutral",
                'city_id' => $cityId[0]
            ],
            [
                "message" => "There is new project started in, $cityName[1]",
                "sentiment" => "Positive",
                'city_id' => $cityId[1]
            ],
            [
                "message" => "Dubai EXPO 2020 will create a new image for the middle, $cityName[2]",
                "sentiment" => "Positive",
                'city_id' => $cityId[2]
            ],
            [
                "message" => "I hate black people, there are so many of them in, $cityName[3]",
                "sentiment" => "Negative",
                'city_id' => $cityId[3]
            ],
            [
                "message" => "Do you COVID Vaccine, $cityName[4], is good?",
                "sentiment" => "Negative",
                'city_id' => $cityId[4]
            ]

        ]);
    }
}
