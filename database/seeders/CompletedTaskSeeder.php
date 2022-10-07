<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\CompletedTask;
use App\Models\Task;
use Illuminate\Database\Seeder;

class CompletedTaskSeeder extends Seeder
{
    private const TABLE_SEED_COUNT = 3;

    public function run(): void
    {
        $tasks = Task::all();

        foreach ($tasks as $task) {
            CompletedTask::factory()->count(self::TABLE_SEED_COUNT)->create([
                'task_id' => $task->id,
            ]);
        }
    }
}
