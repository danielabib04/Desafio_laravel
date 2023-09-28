<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'birthDate' => fake()->dateTime()->format('Y-m-d H:i:s'),
            'address' => fake()->address(),
            'telephone' => fake()->e164PhoneNumber(),
        ];
    }
}
