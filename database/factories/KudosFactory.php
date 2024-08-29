<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Work;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kudos>
 */
class KudosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'work_id'=>Work::factory(),
            'kudos'=>rand(100,500)
        ];
    }
}
