<?php

namespace Database\Factories;

use App\Models\Bill;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'arrival_date'=>date('Y_m_d'),
            'departure_date'=>date('Y_m_d'),
            'del'=>fake()->randomElement(['0', '1']),
            'bill_id' => Bill::all()->random()->id,
            'user_id' =>User::all()->random()->id
        ];
    }
}
