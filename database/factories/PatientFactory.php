<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Helfcareplan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
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
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'remember_token' => Str::random(10),
            'wasbornat' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'address' => fake()->address(),
            'tell' => fake()->phonenumber(),
            'cpf' => fake()->unique()->numerify('###########'),
            'typeofblood' => fake()->randomElement([
                'A+',
                'A-',
                'AB+',
                'AB-',
                'O+',
                'O-',
                'B+',
                'B-',
            ]),
            'pic' => fake()->text(),
            'helfcareplan_id' => Helfcareplan::inRandomOrder()->first()->id,
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
