<?php

namespace Database\Factories;

use App\Models\Hotel;
use App\Models\Type_room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price'=>fake()->randomNumber(3, false),
            'active'=>fake()->randomElement(['0', '1']),
            'hotel_id' => Hotel::all()->random()->id,
            'type_room_id' => Type_room::all()->random()->id
        ];
    }
}
