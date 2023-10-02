<?php

namespace Database\Seeders;

use App\Models\SubAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubAccount::factory()->count(100)->create();
    }
}
