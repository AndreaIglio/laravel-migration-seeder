<?php

use Illuminate\Database\Seeder;
use App\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $course_list = config('course');

        foreach ($course_list as $course) {


            $newCourse = new Course();
            $newCourse->name = $course['name'];
            $newCourse->description = $course['description'];
            $newCourse->hours = $course['hours'];
            $newCourse->save();
        }


    }
}
