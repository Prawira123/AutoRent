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
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->unique();
            $table->string('nik')->unique();
            $table->string('sim_number')->unique();
            $table->string('sim_type');
            $table->date('sim_expired_at');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_phone');
            $table->integer('total_rentals')->default(0);
            $table->integer('total_late_returns')->default(0);
            $table->string('risk_level')->default('low');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_profiles');
    }
};
