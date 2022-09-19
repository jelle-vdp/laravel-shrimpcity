<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class GigFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $headlinerFirst = $this->faker->firstName();
        $date = $this->faker->dateTimeInInterval($startDate = 'now', $interval = '+ 365 days');
        $description = $this->faker->paragraphs($nb = 6, $asText = false);
        $description2 = $this->faker->paragraphs($nb = 4, $asText = false);
        array_push($description, "Yes, you can also include seperate links, like <a href='https://www.google.com'>this</a> or for example make a <b>text bold</b>.");
        
        return [
            'headliner_one' => $headlinerFirst . ' ' . $this->faker->city(),
            'description_headliner_one' => json_encode($description),
            'headliner_one_country' => $this->faker->countryCode(),
            'headliner_two' => $this->faker->city() . ' ' . $this->faker->lastName(),
            'headliner_three' => null,
            'headliner_four' => null,
            'first_support_band' => $this->faker->city() . ' ' . $this->faker->lastName(),
            'description_first_support_band' => json_encode($description2),
            'second_support_band' => $this->faker->word() . ' ' . $this->faker->lastName(),
            'third_support_band' => null,
            'fourth_support_band' => null,
            'date' => $this->faker->dateTimeInInterval($startDate = 'now', $interval = '+ 365 days', $timezone = null),
            'slug' => strtolower($headlinerFirst),
            'tags' => 'Shrimp',
            'venue' => "Shrimpcity",
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 60),
            'logo-url' => 'https://picsum.photos/id/' . rand(1, 200) .  '/2000/2000'
        ];
    }
}
