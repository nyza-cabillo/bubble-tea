<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header' => fake() -> text(),
            'sub_header' => fake() -> text(),
            'image' => fake() -> text(),
            'description' => fake() -> text(),
            'user_id' => fake() -> randomElement([2, 20])
        ];
    }
}
 