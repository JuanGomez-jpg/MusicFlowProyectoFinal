<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Albums>
 */
class AlbumsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /*$path = $this->faker->image('public/storage/images', 500, 500, null, false);
        Storage::put('public/storage/images/'. $path);*/
        $imageName = time() . '_' . Str::random(10) . '.jpg';
        $imageContent = file_get_contents($this->faker->imageUrl(500, 500));
        Storage::put('public/images/' . $imageName, $imageContent);

        return [
            'albumName' => $this->faker->word(),
            'artistName' => $this->faker->word(),
            'year' => $this->faker->numberBetween(1500, 2023),
            'genre' => $this->faker->word(),
            'coverImg' => $imageName,
            'description' => $this->faker->realText($maxNbChars = 100),
            'price' => $this->faker->randomFloat(2, 20, 30),
            'user_id' => '1'
        ];
    }
}
