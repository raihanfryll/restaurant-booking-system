<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
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
        $index = fake()->numberBetween(0, 1);

        $remark = [
            'Booking accepted',
            'Table not available'
        ];

        $status = [
            'Accepted',
            'Rejected',
        ];

        return [
            'bookingNo' => fake()->biasedNumberBetween(100000000000, 999999999999),
            'fullName' => fake()->name(),
            'emailId' => fake()->email(),
            'phoneNumber' => fake()->biasedNumberBetween(100000000000, 999999999999),
            'bookingDate' => fake()->date(),
            'bookingTime' => fake()->time(),
            'noAdults' => fake()->numberBetween(0, 10),
            'noChildrens' => fake()->numberBetween(0, 10),
            'tableId' => fake()->numberBetween(1, 6),
            'adminremark' => $remark[$index],
            'boookingStatus' => $status[$index],
        ];
    }
}
