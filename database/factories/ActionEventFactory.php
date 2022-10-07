<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActionEventFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;
    private const TINY_INT_UNSIGNED_MAX = 255;

    public function definition(): array
    {
        return [
            'action_id' => rand(0, self::INT_UNSIGNED_MAX),
            'event_id' => rand(0, self::TINY_INT_UNSIGNED_MAX),
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
