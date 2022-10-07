<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('action_event', function (Blueprint $table): void {
            $table->unsignedInteger('action_id');
            $table->unsignedTinyInteger('event_id');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['action_id', 'event_id'], 'primary');
            $table->foreign('action_id')->references('id')->on('actions');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('action_event');
    }
};
