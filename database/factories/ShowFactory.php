<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ShowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $headlinerOne = $this->faker->firstName() . ' ' . $this->faker->city();
        $descriptionHeadliner = $this->faker->paragraphs($nb = 6, $asText = false);
        $descriptionSupport = $this->faker->paragraphs($nb = 4, $asText = false);
        $tags = [];
        for ($i = 0; $i < rand(1, 3); $i++) {
            $tags[$i] = $this->faker->word();
        };
        $venue = ['Shrimpcity Beach', 'The Shrimp Bar', 'The Shrimpquee'][rand(0, 2)];
        
        array_push($descriptionHeadliner, "Yes, you can also include seperate links, like <a href='https://www.google.com'>this</a> or for example make a <b>text bold</b>.");
        
        return [
            'headliner_one' => $headlinerOne,
            'headliner_one_description' => json_encode($descriptionHeadliner),
            'headliner_one_country' => $this->faker->countryCode(),
            'support_one' => $this->faker->city() . ' ' . $this->faker->lastName(),
            'support_one_description' => json_encode($descriptionSupport),
            'date' => $this->faker->dateTimeInInterval($startDate = 'now', $interval = '+ 365 days', $timezone = null),
            'slug' => str_replace(' ', '-', strtolower($headlinerOne)),
            'summary' => str_replace(array("\r", "\n"), '', $this->faker->sentences($nb = 2, $asText = true)),
            'tags' => json_encode($tags),
            'venue' => $venue,
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 5, $max = 60),
            'image-url' => 'https://picsum.photos/id/' . rand(1, 200) .  '/2000/2000'
        ];
    }
}
