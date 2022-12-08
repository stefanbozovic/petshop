<?php

namespace Database\Factories;

use \App\Models\Owner;
use \App\Models\Pet;
use \App\Models\Necklace;
use Illuminate\Database\Eloquent\Factories\Factory;

class NecklaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        return [
            'naziv' => $this->faker->title(),
            'vrsta_materijala' => $this->faker->word(),
            'pet_id' => Pet::factory(),
            
        ];
    }
}
