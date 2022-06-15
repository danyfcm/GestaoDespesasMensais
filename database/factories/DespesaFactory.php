<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DespesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nome'       => $this -> faker -> sentence(4),
            'quantidade' => $this -> faker -> randomFloat(2, 1, 1000),
            'data'       => $this -> faker -> dateTime(),
            'userid'     => $this -> faker -> randomDigitNotNull()

        ];
    }
}
