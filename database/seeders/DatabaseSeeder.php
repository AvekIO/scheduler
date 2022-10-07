<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(EventSeeder::class);
        $this->call(ActionSeeder::class);
        $this->call(ActionEventSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(CompletedTaskSeeder::class);
    }
}
