<?php

namespace Database\Factories;

use App\Models\Tests;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tests>
 */
class TestsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Tests::class;
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'fees' => fake()->randomNumber(4,true),
        ];
    }
}
