<?php

namespace Database\Factories;

use App\Models\Zapatilla;
use Illuminate\Database\Eloquent\Factories\Factory;

class ZapatillaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Zapatilla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'marca' =>$this->faker->marca,
            'color' =>$this->faker->color,
            'precio' =>$this->faker->precio,
        ];
    }
}
