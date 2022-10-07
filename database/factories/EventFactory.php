<?php
declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    public function definition(): array
    {
        $timestamp = $this->faker->dateTimeBetween('-1 year');

        return [
            'name' => $this->faker->text(255),
            'description' => $this->faker->text(1000),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
