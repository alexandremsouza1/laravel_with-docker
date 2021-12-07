<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'nome' => $faker->name,
            'telefone' => $faker->phoneNumber,
            'cpf' => $faker->tld,
            'placa' => $faker->randomElements(['ABC-1234', 'XYZ-1234', 'ABC-1235', 'XYZ-1235'])[0],
        ];
    }
}
