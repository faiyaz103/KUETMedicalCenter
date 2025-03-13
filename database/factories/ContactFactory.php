<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => 'Central Medical Center',
            'organization' => 'Khulna University of Engineering & Technology',
            'location' => 'Khulna-9203, Bangladesh',
            'telephone' => '02477732986 (Ext. 8930)',
            'mobile' => '01714087203',
            'email' => 'cmo@kuet.ac.bd',
        ];
    }
}
