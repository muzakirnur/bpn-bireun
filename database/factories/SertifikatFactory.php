<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SertifikatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hak' => $this->faker->name(),
            'nomor' => $this->faker->randomNumber(3, true),
            'provinsi' => $this->faker->name(),
            'kabupaten' => $this->faker->name(),
            'kecamatan' => $this->faker->name(),
            'desa' => $this->faker->name(),
        ];
    }
}
