<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Delivery_method;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $deliveryMethods = [
            ['name' => 'Take Away', 'price' => 0.00, 'estimated_time' => '1 hour'],
            ['name' => 'Standard Delivery', 'price' => 5.00, 'estimated_time' => '2-3 days'],
            ['name' => 'Express Delivery', 'price' => 10.00, 'estimated_time' => '1 day'],
            ['name' => 'BTS Express', 'price' => 8.00, 'estimated_time' => '5-7 days'],
        ];
        foreach ($deliveryMethods as $deliveryMethodData) {
            Delivery_method::create($deliveryMethodData);
        }

    }
}
