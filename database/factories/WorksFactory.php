<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Works>
 */
class WorksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author'=> 1,
            'title' => fake()->title(),
            'body' => fake()->text(),
            'chapters'=>rand(1,20)
        ];
    }
}
