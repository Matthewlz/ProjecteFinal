<?php

namespace Database\Factories;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Galerie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imatge'=>$this->faker->randomElement(["bg1.jgp"]),
            'descripcio'=>$this->faker->sentence(),
            'carpeta'=>$this->faker->randomElement(["imatges/"])
        ];
    }
}
