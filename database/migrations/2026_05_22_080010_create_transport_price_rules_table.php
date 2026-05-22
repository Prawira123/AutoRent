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
        Schema::create('transport_price_rules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('transport_id');
            $table->string('rule_type');
            $table->string('day_type');
            $table->decimal('multiplier', 8, 2)->nullable();
            $table->decimal('flat_price', 12, 2)->nullable();
            $table->date('valid_from');
            $table->date('valid_until');
            $table->boolean('is_active')->default(true);
            $table->timestamp('created_at')->useCurrent();
            
            $table->foreign('transport_id')->references('id')->on('transport')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_price_rules');
    }
};
