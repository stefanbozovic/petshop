<?php

namespace Database\Factories;

use \App\Models\Owner;
use \App\Models\Pet;
use \App\Models\Necklace;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vrsta' => $this->faker->word(),
            'rasa' => $this->faker->word(),
            'ime' => $this->faker->firstname(),
            'owner_id' => Owner::factory(),
            
        ];
    }
}

