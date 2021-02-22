<?php


use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $students_list =[
            [
                "name"=> 'Andrea',
                "lastname" => 'Iglio',
                "nationality" => 'Italian',
                "yob" => '1994-01-28',
            ],
            [
                "name" => 'Ajeje',
                "lastname" => 'Brazorf',
                "nationality" => 'Prussian',
                "yob" => '1998-08-03',
            ],
            [
                "name" => 'Birillo',
                "lastname" => 'Impennato',
                "nationality" => 'German',
                "yob" => '1988-06-03',
            ],
        ];



        foreach ($students_list as $student) {
            

            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->nationality = $student['nationality'];
            $newStudent->yob = $student['yob'];
            $newStudent->save();


        }


    }
}
