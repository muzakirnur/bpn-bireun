<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PembukuanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kota' => $this->faker->city(),
            'tanggal' => $this->faker->dateTimeBetween('-30 years', '+30 years'),
            'nama' => $this->faker->name(),
            'nip' => $this->faker->numberBetween(00000000000000000, 999999999999999999),
        ];
    }
}
