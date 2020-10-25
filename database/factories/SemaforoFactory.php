<?php

namespace Database\Factories;

use App\Models\Semaforo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SemaforoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Semaforo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'latitude' =>$this->faker->latitude,
            'longitude' =>$this->faker->longitude,
            
        ];
    }
}
