<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->phoneNumber(),
            'birth_date' => $this->faker->dateTimeThisCentury()->format('Y-m-d'),
            'hiring_date' => $this->faker->dateTimeThisDecade()->format('Y-m-d'),
            'salary' => $this->faker->randomFloat(2, 600, 5000),
        ];
    }
}
