<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Action;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 100;

    public function run(): void
    {
        Action::factory()->count(self::TABLE_SEED_COUNT)->create();
    }
}
