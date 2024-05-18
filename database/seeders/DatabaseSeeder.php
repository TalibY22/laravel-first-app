<?php

namespace Database\Seeders;

use App\Models\student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $faker = Faker::create();

        for($i = 1 ; $i <= 10 ; $i++){
            student::create([
                'fname' => $faker->firstName,
                'lname'  => $faker->lastName,
                
                'phone_number'     => $faker->phoneNumber,
                'age' =>  $faker->numberBetween(0, 15),
                'address'   => $faker->country

            ]);
        } 

    
    
    }
}
