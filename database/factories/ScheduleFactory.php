<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'time' => $this->faker->dateTimeBetween('-1 year'),
            'task_id' => self::INT_UNSIGNED_MAX,
            'input_data' => json_encode([]),
            'is_running' => $this->faker->boolean,
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
