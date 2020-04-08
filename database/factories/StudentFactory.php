<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name'=>$faker->name,
        'last_name'=>$faker->name,
        'user_id'=>$faker->randomDigit,
        'grade_id'=>$faker->randomDigit,
    ];
});
