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
        Schema::create('cities', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name');
            $table->string('province');
            $table->timestamps();
        });

        Schema::create('barangays', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('city_id')->index();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('barangays');
    }
};
