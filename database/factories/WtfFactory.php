<?php

namespace Database\Factories;

use App\Models\Wtf;
use Illuminate\Database\Eloquent\Factories\Factory;

class WtfFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wtf::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'count' => $this->faker->randomNumber()
        ];
    }
}
