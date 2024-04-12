<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $car = collect([
            'toyota' => [
                'Camry',
                'Corolla',
                'RAV4',
                'Prius',
                'Land Cruiser',
                'Hilux',
            ],
            'honda' => [
                'Civic',
                'Accord',
                'CR-V',
                'Pilot',
                'Odyssey',
            ],
            'Ford' => [
                'Mustang',
                'F-150',
                'Explorer',
                'Focus',
                'Escape',
            ],
            'Chevrolet' => [
                'Silverado',
                'Malibu',
                'Equinox',
                'Camaro',
                'Tahoe',
            ],
        ]);

        $brand = $car->keys()->random();
        $model = $car[$brand][fake()->numberBetween(0, count($car[$brand]) - 1)];

        return [
            'brand' => $brand,
            'type' => $model,
            'plat_number' => strtoupper(Str::random(2)) . ' ' . fake()->randomNumber(5) . ' ' . strtoupper(Str::random(2)),
            'rate_per_day' => fake()->numberBetween(100000,500000),
        ];
    }
}
