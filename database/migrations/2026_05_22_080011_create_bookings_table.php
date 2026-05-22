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
        Schema::create('bookings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('booking_code')->unique();
            $table->uuid('user_id');
            $table->uuid('transport_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->timestamp('scheduled_return_at')->nullable();
            $table->timestamp('warning_sent_at')->nullable();
            $table->timestamp('overdue_started_at')->nullable();
            $table->timestamp('actual_return_at')->nullable();
            $table->integer('warning_threshold_hours')->default(24);
            $table->decimal('price_per_day', 12, 2);
            $table->decimal('subtotal', 12, 2);
            $table->decimal('discount_amount', 12, 2)->default(0);
            $table->decimal('deposit_amount', 12, 2)->nullable();
            $table->decimal('total_amount', 12, 2);
            $table->string('status')->default('pending');
            $table->string('return_status')->default('not_returned');
            $table->string('pickup_location');
            $table->string('dropoff_location')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('transport_id')->references('id')->on('transport')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
