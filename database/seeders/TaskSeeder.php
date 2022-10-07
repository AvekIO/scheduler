<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Action;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 10;

    public function run(): void
    {
        $actions = Action::all();

        foreach ($actions as $action) {
            Task::factory()->count(self::TABLE_SEED_COUNT)->create([
                'action_id' => $action->id,
            ]);
        }
    }
}
