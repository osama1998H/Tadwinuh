<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubAccount>
 */
class SubAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['Customer', 'Banking Company', 'Revenue Account', 'Expense Account', 'Bank Account']);
        return [
            'type' => $type,
            'account_name' => $this->faker->name(),
            'account_id' => $this->faker->numberBetween(1, 300),
            'mobile_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->email(),
            'address' => $this->faker->address(),
            'credit_limit' => $this->faker->numberBetween(100, 5000),
            'note' => $this->faker->text(),
            'discount_percentage' => $this->faker->numberBetween(1, 15),
            'is_frozen' => $this->faker->boolean(),
        ];
    }
}
