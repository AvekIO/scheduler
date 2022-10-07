<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompletedTaskFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;
    private const MAX_STATUS_VALUE = 10;

    public function definition(): array
    {
        return [
            'task_id' => rand(0, self::INT_UNSIGNED_MAX),
            'status' => rand(0, self::MAX_STATUS_VALUE),
            'result' => json_encode([]),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
