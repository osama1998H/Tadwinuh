<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sender>
 */
class SenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_type = $this->faker->randomElement(["ID", "Passport", "Driver License"]);
        return [
            'full_name' => $this->faker->name(),
            'nationality' => $this->faker->country(),
            'country' => $this->faker->country(),
            'phone_number' => $this->faker->phoneNumber(),
            'dob' => $this->faker->dateTimeThisDecade(),
            'id_type' => $id_type,
            'id_number' => (string)$this->faker->randomNumber(8),
            'date_of_issue' => $this->faker->dateTimeThisDecade(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->city(),
        ];
    }
}
