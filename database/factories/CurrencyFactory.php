<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $currency = $this->faker->unique()->currencyCode();
        return [
            'name' => $currency,
            'exchange_rate' => $this->faker->randomFloat(3, 1, 3),
            'selling_rate' => $this->faker->randomFloat(3, 1, 3),
            'buying_rate' => $this->faker->randomFloat(3, 1, 3),
            'min_selling_rate' => $this->faker->randomFloat(3, 1, 3),
            'max_buying_rate' => $this->faker->randomFloat(3, 1, 3),
            'currency_symbol' => $currency,
        ];
    }
}
