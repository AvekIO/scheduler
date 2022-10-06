<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('completed_tasks', function (Blueprint $table): void {
            $table->unsignedInteger('task_id');
            $table->unsignedTinyInteger('status');
            $table->json('result');
            $table->timestamp('created_at')->useCurrent();

            $table->primary(['task_id', 'created_at'], 'primary');
            $table->foreign('task_id')->references('id')->on('tasks');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('completed_tasks');
    }
};
