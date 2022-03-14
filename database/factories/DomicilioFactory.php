<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;
use UserFactory;

class DomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [   
            'user_id' => function(){
                return User::factory()->create()->id;
            },
            'domicilio' => $this->faker->name(),
            'numero_exterior' => $this->faker->numberBetween(1,500),
            'colonia' => $this->faker->text(),
            'cp' => $this->faker->numberBetween(1,500),
            'ciudad' => $this->faker->text(),
        ];
    }
}
