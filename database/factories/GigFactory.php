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
        
        return [
            'headliner_one' => $headlinerFirst . ' ' . $this->faker->city(),
            'headliner_one_country' => $this->faker->countryCode(),
            'headliner_two' => $this->faker->city() . ' ' . $this->faker->lastName(),
            'headliner_three' => null,
            'headliner_four' => null,
            'first_support_band' => $this->faker->city() . ' ' . $this->faker->lastName(),
            'second_support_band' => $this->faker->word() . ' ' . $this->faker->lastName(),
            'third_support_band' => null,
            'fourth_support_band' => null,
            'date' => $this->faker->dateTimeInInterval($startDate = 'now', $interval = '+ 365 days', $timezone = null),
            'description' => $this->faker->paragraph(),
            'slug' => strtolower($headlinerFirst),
            'tags' => 'Shrimp',
            'venue' => "Shrimptown",
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 60),
            'logo-url' => 'https://picsum.photos/id/' . rand(1, 250) .  '/2000/2000'
        ];
    }
}
