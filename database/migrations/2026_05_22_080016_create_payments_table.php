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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('booking_id')->nullable();
            $table->uuid('penalty_id')->nullable();
            $table->string('payment_code')->unique();
            $table->string('gateway');
            $table->string('gateway_tx_id')->nullable();
            $table->string('method');
            $table->string('payment_type');
            $table->decimal('amount', 12, 2);
            $table->string('currency')->default('IDR');
            $table->string('status')->default('pending');
            $table->json('gateway_response')->nullable();
            $table->string('redirect_url')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('set null');
            $table->foreign('penalty_id')->references('id')->on('booking_penalties')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
