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
        Schema::create('transport', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('category_id');
            $table->uuid('subcategory_id');
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('plate_number')->unique();
            $table->integer('year');
            $table->string('color');
            $table->string('fuel_type');
            $table->integer('engine_cc');
            $table->integer('seat_capacity');
            $table->string('transmission');
            $table->decimal('price_per_day', 12, 2);
            $table->decimal('price_per_hour', 12, 2);
            $table->decimal('deposit_amount', 12, 2);
            $table->string('status')->default('available');
            $table->string('condition');
            // $table->float('latitude')->nullable();
            // $table->float('longitude')->nullable();
            // $table->string('location_name')->nullable();
            $table->json('images')->nullable();
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->timestamps();
            
            $table->foreign('category_id')->references('id')->on('transport_categories')->onDelete('restrict');
            $table->foreign('subcategory_id')->references('id')->on('transport_subcategories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport');
    }
};
