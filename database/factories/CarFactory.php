<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color' => $this->faker->safeColorName,
            'price' => $this->faker->randomNumber(5),
            'license_plate' => $this->faker->word . '' . $this->faker->numberBetween(100, 800),
            'number_of_doors' => $this->faker->numberBetween(1, 4),
            'transmission' => $this->faker->randomElement(['manual', 'automatic']),
            'fuel' => $this->faker->randomElement(['petrol', 'diesel']),
        ];
    }
}
