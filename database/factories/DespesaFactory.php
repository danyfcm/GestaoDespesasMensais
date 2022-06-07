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

            'nome'     => $this -> faker -> name(),
            'quantidade'      => $this -> faker -> randomFloat(),
            'data'   => $this -> faker -> dateTime()

        ];
    }
}
