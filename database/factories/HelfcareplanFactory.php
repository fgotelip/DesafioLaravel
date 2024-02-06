<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Helfcareplan>
 */
class HelfcareplanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
     public function definition() : array
     {
         return [
             'name' => $this->faker->randomElement([
                 'Plano Essencial',
                 'Plano Familiar',
                 'Plano Completo',
                 'Plano Premium',
                 'Plano Vital',
                 'Plano Master'
             ]),
             'description' => function (array $attributes) {
                 $descriptions = [
                     'Plano Essencial' => 'O Plano Essencial oferece uma cobertura básica para consultas médicas e exames.',
                     'Plano Familiar' => 'O Plano Familiar é ideal para famílias, com cobertura ampla para consultas, exames e procedimentos médicos.',
                     'Plano Completo' => 'O Plano Completo oferece uma cobertura completa para consultas, exames, cirurgias e internações.',
                     'Plano Premium' => 'O Plano Premium é nossa melhor opção, com cobertura abrangente e acesso a uma ampla rede de hospitais e clínicas.',
                     'Plano Vital' => 'O Plano Vital oferece cobertura essencial para garantir sua saúde e bem-estar.',
                     'Plano Master' => 'O Plano Master é indicado para quem busca o máximo em cuidados de saúde, com cobertura total e serviços exclusivos.'
                 ];
                 return $descriptions[$attributes['name']];
             },
             'discount' => function (array $attributes) {
                 $discounts = [
                     'Plano Essencial' => 10,
                     'Plano Familiar' => 20,
                     'Plano Completo' => 25,
                     'Plano Premium' => 30,
                     'Plano Vital' => 50,
                     'Plano Master' => 75,
                 ];
                 return $discounts[$attributes['name']];
             }
         ];
     }
}
