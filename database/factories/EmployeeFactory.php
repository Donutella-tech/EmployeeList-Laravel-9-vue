<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    { $faker=Faker::create('ru_RU');
        return [


            \DB::table('employees')->insert([
                'name' => $faker->name(),
                'position' => $faker->realText(10),
                'date' => $faker->date(),
                'salary' => $faker->randomNumber(4),
                'boss' => $faker->randomNumber(3),
                'image'=>null,
            ])


        ];
    }
}
