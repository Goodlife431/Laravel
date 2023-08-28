<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;
use App\Models\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->fake()->unique()->sentence(),
            'excerpt' => $this->fake()->realText(maxNbChars:50),
            'body' => $this->fake()->text(),
            'image path' => $this->fake()->imageUrl(640, 480),
            'is_published' => 1,
            'min_to_read' => $this->fake()->numberBetween(1,10)
        ];
    }
}
