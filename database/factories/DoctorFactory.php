<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Doctor::class;
    public function definition(): array
    {
        return [
            //
            'image' => 'https://via.placeholder.com/150', // Placeholder image
            'name' => $this->faker->name(),
            'designation' => $this->faker->jobTitle(),
            'specialization' => $this->faker->word(),
            'contact' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
