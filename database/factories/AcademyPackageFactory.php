<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcademyPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'title'=>$this->faker->title(),
            'type'=>$this->faker->word(),
            'mentor'=>$this->faker->name(),
            'rating'=>rand(4.5,5.0),
            'time'=>rand(20,40),
            'lesson'=>rand(10,20),
            'level'=>$this->faker->word(),
            'desc_detail'=>$this->faker->paragraph(),
            'desc_goal'=>$this->faker->paragraph(),
            'desc_syllabus'=>$this->faker->paragraph()

        ];
    }
}
