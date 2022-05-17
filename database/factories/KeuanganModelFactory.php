<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KeuanganModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bulan' => $this->faker->monthName(),
            'minggu1' => $this->faker->numberBetween(1000000, 5000000),
            'minggu2' => $this->faker->numberBetween(1000000, 5000000),
            'minggu3' => $this->faker->numberBetween(1000000, 5000000),
            'minggu4' => $this->faker->numberBetween(1000000, 5000000),
        ];
    }
}
