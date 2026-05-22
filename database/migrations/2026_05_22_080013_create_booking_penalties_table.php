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
        Schema::create('booking_penalties', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('booking_id');
            $table->string('penalty_type');
            $table->integer('overdue_hours')->default(0);
            $table->decimal('rate_per_hour', 12, 2);
            $table->decimal('amount', 12, 2);
            $table->text('description')->nullable();
            $table->string('status')->default('unpaid');
            $table->timestamp('calculated_at');
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_penalties');
    }
};
