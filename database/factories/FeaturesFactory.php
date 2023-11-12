<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Features>
 */
class FeaturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                "icon"=> 'fa-sharp fa-light fa-trash-can fa-beat',
                'title'=> fake()->sentence(),
                'subtitle'=> fake()->sentence(),
                'twi'=> fake()->sentence(),
                'description'=> fake()->sentence(),
                'status'=> fake()->boolean(),
        ];

    }
}
