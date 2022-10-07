<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 50;

    public function run(): void
    {
        Event::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
