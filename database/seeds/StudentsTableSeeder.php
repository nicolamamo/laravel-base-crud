<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            $new_student = new Student();
            $new_student->name=$faker->name;
            $new_student->surname=$faker->lastName;
            $new_student->number=$faker->randomNumber();
            $new_student->mail=$faker->email;

            $new_student->save();
        }
    }
}
