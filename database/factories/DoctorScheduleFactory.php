<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DoctorSchedule>
 */
class DoctorScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=DoctorSchedule::class;
    public function definition(): array
    {
        return [
            //
            'doctor_id' => Doctor::factory(),
            'saturday' => '9 AM - 5 PM',
            'sunday' => '9 AM - 5 PM',
            'monday' => '9 AM - 5 PM',
            'tuesday' => '9 AM - 5 PM',
            'wednesday' => '9 AM - 5 PM',
            'thursday' => 'Holiday',
            'friday' => 'Holiday',
        ];
    }
}
