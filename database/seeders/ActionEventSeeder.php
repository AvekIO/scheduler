<?php
declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Action;
use App\Models\ActionEvent;
use App\Models\Event;
use Illuminate\Database\Seeder;

class ActionEventSeeder extends Seeder
{
    public function run(): void
    {
        $events = Event::all();
        $actions = Action::all();

        foreach ($events as $event) {
            foreach ($actions as $action) {
                ActionEvent::factory()->create([
                    'event_id' => $event->id,
                    'action_id' => $action->id,
                ]);
            }
        }
    }
}
