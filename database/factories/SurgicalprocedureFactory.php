<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Specialty;
use App\Models\Patient;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SurgicalprocedureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'specialty_id' => Specialty::inRandomOrder()->first()->id,
            'patient_id' => Patient::inRandomOrder()->first()->id,
            'doctor_id' => Doctor::inRandomOrder()->first()->id,
            'inicialtime' => fake()->dateTime($max = 'now'),
            'finaltime' => fake()->dateTime($max = 'now'),
            'value' => $this->faker->unique()->randomElement([
                 500,
                 150,
                 200,
                 100,
                 250,
                 600,
            ]),

        ];
    }
}
