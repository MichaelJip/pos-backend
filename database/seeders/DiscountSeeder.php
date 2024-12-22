<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //manual input
        \App\Models\Discount::create([
            'name' => 'New Year Discount',
            'description' => 'New Year Discount 2025',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2025-01-31',
        ]);
        \App\Models\Discount::create([
            'name' => 'Learn Discount',
            'description' => 'Learn Discount 2025',
            'type' => 'percentage',
            'value' => 10,
            'status' => 'active',
            'expired_date' => '2025-01-31',
        ]);


    }
}
