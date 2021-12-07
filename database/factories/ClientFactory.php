<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;


class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        $faker =\Faker\Factory::create('pt_BR');
        return [
            'nome' => $faker->name(),
            'telefone' => $faker->phone(),
            'cpf' => $faker->cpf(),
            'placa' => $faker->numerify('user-####')
        ];
    }
}
