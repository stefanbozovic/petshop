<?php

namespace Database\Seeders;
use \App\Models\Owner;
use \App\Models\Pet;
use \App\Models\Necklace;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Owner::truncate(); //da nam ne izbacuje greske u konzoli
        Pet::truncate();
        Necklace::truncate();

      
        $necklace1= Necklace::factory()->create();
        $necklace2= Necklace::factory()->create();
        
    }
}
