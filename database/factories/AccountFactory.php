<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $type = $this->faker->randomElement(['Assets', 'Liabilities', 'Equity', 'Revenue', 'Expenses']);
        $currency = $this->faker->randomElement(["USD", "IQD"]);

        // Define account number ranges based on account type
        $accountNumberRange = [
            'Assets' => [1000, 2000],
            'Liabilities' => [2000, 3000],
            'Equity' => [3000, 4000],
            'Revenue' => [4000, 5000],
            'Expenses' => [5000, 6000],
        ];

        // Determine the account number based on the account type
        // Generate a unique account number
        do {
            $accountNumber = $this->faker->numberBetween($accountNumberRange[$type][0], $accountNumberRange[$type][1]);
        } while (Account::where('account_number', $accountNumber)->exists()); // Check if it already exists in the database
        return [
            'type' => $type,
            'name' => $this->faker->text(50),
            'account_number' => $accountNumber,
            'currency' => $currency,
            'balance' => $currency == "USD" ? $this->faker->randomFloat(2, 0, 10000) : $this->faker->randomFloat(2, 0, 10000000),
            'is_group' => $this->faker->boolean,
            'parent_account_id' => null, // For non-group accounts, set this to null
            'is_frozen' => $this->faker->boolean,
        ];
    }

    /**
     * Define a state for group accounts.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function group()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_group' => true,
                'balance' => null, // Set the balance to null for group accounts
                'parent_account_id' => null, // A group account doesn't have a parent
            ];
        });
    }

    /**
     * Define a state for child accounts (non-group accounts with a parent).
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function child()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_group' => false,
                'parent_account_id' => Account::factory()->create()->id, // Create a parent account
            ];
        });
    }
}
