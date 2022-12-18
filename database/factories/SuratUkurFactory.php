<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratUkurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->dateTimeThisDecade(),
            'nomor' => $this->faker->randomNumber(3, true),
            'luas' => $this->faker->randomNumber(3, true)
        ];
    }
}
