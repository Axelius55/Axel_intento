<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Perro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perro>
 */
class PerroFactory extends Factory
{
    protected $model=Perro::class;

    public function definition(): array
    {
        $razas=['Labrador Retriever',
            'Pastor Alemán',
            'Golden Retriever',
            'Bulldog Francés',
            'Beagle',
            'Poodle',
            'Chihuahua',
            'Boxer',
            'Rottweiler',
            'Dálmata'
        ];
        return [
            'nombre'=>$this->faker->firstname(),
            'raza'=>$this->faker->randomElement($razas),
            'edad' => $this->faker->numberBetween(1, 15),
        ];
    }
}
