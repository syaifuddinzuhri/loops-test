<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'website' => $this->faker->url(),
            'comment' => $this->faker->paragraph(),
        ];
    }
}
