<?php

use App\Holiday_home;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HolidayHomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <100 ; $i++) { 
            $newHolidayHome = new Holiday_home();
            $newHolidayHome->name= $faker->firstNameFemale();
            $newHolidayHome->city= $faker->city();
            $newHolidayHome->state= $faker->state();
            $newHolidayHome->address= $faker->streetAddress();
            $newHolidayHome->postal_code= $faker->postcode();
            $newHolidayHome->rooms= $faker->numberBetween(1,20);
            $newHolidayHome->square_meters= $faker->numberBetween(35,1000);
            $newHolidayHome->wifi= $faker->boolean();
            $newHolidayHome->kitchen= $faker->boolean();
            $newHolidayHome->description= $faker->text();
            $newHolidayHome->avaiable= $faker->boolean();
            $newHolidayHome->price= $faker->randomFloat(2,200,10000);
            $newHolidayHome->vote= $faker->numberBetween(1,10);
            $newHolidayHome->save();
        }
    }
}


