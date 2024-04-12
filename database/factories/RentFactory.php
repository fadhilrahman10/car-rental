<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Rent;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rent>
 */
class RentFactory extends Factory
{
    protected $model = Rent::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $car = Car::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'car_id' => $car->id,
            'user_id' => $user->id,
            'start_rent' => Date::now(),
            'end_rent' => Date::now()->addDays(fake()->numberBetween(1, 10)),
        ];
    }
}
