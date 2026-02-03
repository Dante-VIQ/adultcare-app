<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calender_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->enum('event_type', ['tour', 'assessment', 'virtual', 'meeting', 'maintenance', 'training', 'holiday']);
            $table->enum('status', ['scheduled', 'completed', 'cancelled', 'rescheduled'])->default('scheduled');
            $table->string('external_id')->nullable()->comment('ID from external calendar service');
            $table->string('external_provider')->nullable()->comment('google, microsoft, etc.');
            $table->json('metadata')->nullable();
            $table->timestamps();

            // Indexes
            $table->index(['start_time', 'status']);
            $table->index(['booking_id', 'event_type']);
            $table->index('external_id');
            $table->index('event_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calender_events');
    }
};
