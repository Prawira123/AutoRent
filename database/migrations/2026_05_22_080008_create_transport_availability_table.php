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
        Schema::create('transport_availability', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('transport_id');
            $table->date('unavailable_from');
            $table->date('unavailable_to');
            $table->string('reason');
            $table->uuid('booking_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('transport_id')->references('id')->on('transport')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_availability');
    }
};
