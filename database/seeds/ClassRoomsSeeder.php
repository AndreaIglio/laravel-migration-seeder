<?php

use App\ClassRooms;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ClassRoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) { 
            $newClassroom = new ClassRooms();
            $newClassroom->name = $faker->regexify('[A-Z]{1}[0-5]{1}');
            $newClassroom->capacity = $faker->numberBetween(10, 30);
            $newClassroom->save();
        }
    }
}
