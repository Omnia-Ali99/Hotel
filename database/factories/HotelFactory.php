<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'name'=>fake()->randomElement([
               ' Thompson Hotels',
               ' Hotels & Resorts',
                'Hyatt Hotels',
                'Andaz Hotels',
                'Secrets Resorts & Spas',
                'Dreams Resorts & Spas',
                'Park Hyatt Hotels',
                'Grand Hyatt Hotels',
                'Hyatt Regency Hotels',
                'Hyatt Centric Hotels',
                'Hyatt Place Hotels',
                'Hyatt HouseHotels'
            ]),
            
            'mobile'=> fake()->phoneNumber(),
            'address' => fake()->unique()->address(),
            'city_id' => City::all()->random()->id,
            'photo'=>fake()->imageUrl(500, 400, 'hotel', true),
            'admin_id' => Admin::all()->random()->id,
          
        ];
    }
}
