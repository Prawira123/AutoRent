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
        Schema::create('transport_maintenance', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('transport_id');
            $table->string('maintenance_type');
            $table->text('description');
            $table->decimal('cost', 12, 2);
            $table->string('status')->default('scheduled');
            $table->date('scheduled_at');
            $table->date('completed_at')->nullable();
            $table->uuid('handled_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('transport_id')->references('id')->on('transport')->onDelete('cascade');
            $table->foreign('handled_by')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_maintenance');
    }
};
