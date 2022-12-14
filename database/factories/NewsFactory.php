<?php

namespace Database\Factories;

use App\Models\Show;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $title = substr($this->faker->sentence($nbWords = 4, $variableNbWords = true), 0, -1);
        
        return [
            'title' => substr($this->faker->sentence($nbWords = 4, $variableNbWords = true), 0, -1),
            'slug' => strtolower(str_replace(" ", "-", $title)),
            'summary' => str_replace(array("\r", "\n"), '', $this->faker->sentences($nb = 2, $asText = true)),
            'body' => json_encode($this->faker->paragraphs($nb = 12, $asText = false)),
            'date' => $this->faker->dateTimeBetween($startDate = '-200 days', $endDate = 'now'),
            'image_url' => 'https://picsum.photos/id/' . rand(1, 200) .  '/1600/1600',
            'show_id' => Show::all()->random()->id
        ];
    }
}
