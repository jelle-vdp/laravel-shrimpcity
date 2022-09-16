<?php

namespace Database\Factories;

use App\Models\Gig;
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
        $title = $this->faker->sentence($nbWords = 4, $variableNbWords = true);
        
        return [
            'title' => $title,
            'slug' => strtolower(str_replace(" ", "-", $title)),
            'body' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'fake_date' => $this->faker->dateTimeBetween($startDate = '-200 days', $endDate = 'now'),
            'image_url' => 'https://picsum.photos/id/' . rand(1, 100) .  '/500/500',
            'gig_id' => Gig::all()->random()->id
        ];
    }
}
