<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table): void {
            $table->timestamp('time');
            $table->unsignedInteger('task_id');
            $table->json('input_data');
            $table->boolean('is_running')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->primary(['time', 'task_id'], 'primary');
            $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
