<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActionFactory extends Factory
{
    private const INT_UNSIGNED_MAX = 4294967295;

    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'bot_id' => rand(0, self::INT_UNSIGNED_MAX),
            'name' => $this->faker->text(255),
            'description' => $this->faker->text(1000),
            'data' => json_encode([]),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
