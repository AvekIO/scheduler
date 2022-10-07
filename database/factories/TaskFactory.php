<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;
    private const SMALL_INT_UNSIGNED_MAX = 65535;
    private const SECONDS_IN_YEAR = 60 * 60 * 24 * 365;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'action_id' => rand(0, self::INT_UNSIGNED_MAX),
            'start_at' => $this->faker->dateTimeBetween('-1 year'),
            'interval' => rand(0, self::SECONDS_IN_YEAR),
            'number_of_repetitions' => rand(0, self::SMALL_INT_UNSIGNED_MAX),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
