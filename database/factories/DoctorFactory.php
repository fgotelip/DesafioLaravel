<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;
use App\Models\Specilty;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'wasbornat' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'address' => fake()->address(),
            'tell' => fake()->phonenumber(),
            'cpf' => fake()->unique()->numerify('###########'),
            'workhours' => fake()->randomElement([
                'diurno',
                'noturno',
                'integral',
            ]),
            'crm' => fake()->unique()->numerify('######'),
            'pic' => fake()->imageUrl($width = 640, $height = 480),
           // 'hcp_id' => Specialty::inRandomOrder()->first()->id,
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
