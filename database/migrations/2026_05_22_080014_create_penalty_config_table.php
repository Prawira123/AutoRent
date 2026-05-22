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
        Schema::create('penalty_config', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('penalty_type')->unique();
            $table->string('label');
            $table->integer('grace_period_minutes')->default(0);
            $table->decimal('rate_per_hour', 12, 2);
            $table->decimal('flat_amount', 12, 2)->nullable();
            $table->decimal('max_penalty_amount', 12, 2)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penalty_config');
    }
};
