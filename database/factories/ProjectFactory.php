<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'budget' => fake()->randomFloat(),
            'is_active' => fake()->boolean(),
            'execution_date' => fake()->date(),
            'user_id' => 1,
            'city_id' => 1,
            'company_id' => 1,
        ];
    }
}
