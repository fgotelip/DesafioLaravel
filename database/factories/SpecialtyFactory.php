<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialty>
 */
class SpecialtyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([
                'Cardiologia',
                'Dermatologia',
                'Ortopedia',
                'Pediatria',
                'Ginecologia',
                'Neurologia'
            ]),
            'description' => function (array $attributes) {
                $descriptions = [
                    'Cardiologia' => 'A Cardiologia é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças do coração e do sistema circulatório.',
                    'Dermatologia' => 'A Dermatologia é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças da pele, cabelos e unhas.',
                    'Ortopedia' => 'A Ortopedia é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças e lesões do aparelho locomotor.',
                    'Pediatria' => 'A Pediatria é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças e cuidados de saúde das crianças.',
                    'Ginecologia' => 'A Ginecologia é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças do sistema reprodutor feminino.',
                    'Neurologia' => 'A Neurologia é a especialidade médica que se dedica ao estudo, diagnóstico e tratamento das doenças do sistema nervoso.'
                ];
                return $descriptions[$attributes['name']];
            },
            'value' => function (array $attributes) {
                $values = [
                    'Cardiologia' => 500,
                    'Dermatologia' => 150,
                    'Ortopedia' => 200,
                    'Pediatria' => 100,
                    'Ginecologia' => 250,
                    'Neurologia' => 600,
                ];
                return $values[$attributes['name']];
            }
        ];
    }
}
