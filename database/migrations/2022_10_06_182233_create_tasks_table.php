<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table): void {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('action_id');
            $table->timestamp('start_at')->index();
            $table->unsignedInteger('interval');
            $table->unsignedSmallInteger('number_of_repetitions')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('action_id')->references('id')->on('actions');
            $table->index(['action_id', 'start_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
