<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class productFactory extends Factory
{
    protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name'=> fake()->word(),
        'category_id'=> category::all()->random()->id,
        'image_id' => image::factory()->create()->id,
        // 'image_id' => images::all()->random()->id,
        ];
    }
}
