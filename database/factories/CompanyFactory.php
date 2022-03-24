<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'address' => $this->faker->address(),
            'support_email' => $this->faker->unique()->safeEmail(),
            'support_phone' => $this->faker->phoneNumber(),
            'foundation_date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 1000, 10000000),
        ];
    }
}
