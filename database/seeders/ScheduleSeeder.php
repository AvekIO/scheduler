<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Task;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 3;

    public function run(): void
    {
        $tasks = Task::all();

        foreach ($tasks as $task) {
            Schedule::factory()->count(self::TABLE_SEED_COUNT)->create([
                'task_id' => $task->id,
            ]);
        }
    }
}
