<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Staff;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Staff::class;
    public function definition(): array
    {
        return [
            //
            'image' => 'https://via.placeholder.com/150', // Placeholder image
            'name' => $this->faker->name(),
            'designation' => $this->faker->jobTitle(),
            'contact' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
