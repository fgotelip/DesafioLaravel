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
            'specialty_id' => Specialty::factory()->create()->id,
            'patient_id' => Patient::factory()->create()->id,
            'doctor_id' => Doctor::factory()->create()->id,
            'inicialtime' => fake()->dateTime($max = 'now')->format('2023-m-d H:i:s'),
            'finaltime' => fake()->dateTime($max = 'now')->format('2023-m-d H:i:s'),
            'value' => $this->faker->randomElement([
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
