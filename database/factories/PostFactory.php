<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'published' => $this->faker->boolean(),
            'catagory' => $this->faker->word()
        ];
    }


}
