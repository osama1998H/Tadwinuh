<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                CountrySeeder::class,
                ProvinceSeeder::class,
                NationalitySeeder::class,
                DestinationSeeder::class,
                AccountSeeder::class,
                SenderSeeder::class,
                SubAccountSeeder::class,
                CurrencySeeder::class
            ]
        );
    }
}
