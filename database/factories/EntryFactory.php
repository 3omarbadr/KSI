<?php

namespace Database\Factories;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Entry::class;

    public function definition()
    {
        return [
            'message' => fake()->text(),
            'sentiment' => fake()->word(),
            'city_id'=>fake()->city_id(),
        ];
    }
}
