<?php

namespace Database\Factories;

use \App\Models\Owner;
use \App\Models\Pet;
use \App\Models\Necklace;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {  
        return [
            'ime' => $this->faker->firstname(),
            'prezime' => $this->faker->lastname(),
            'email' => $this->faker->email(),
            'sifra' => Str::random(8),
            'remember_token' => Str::random(10),
        ];
    }
}
