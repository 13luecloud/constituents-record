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
        Schema::create('constituents_received_benefits', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->ulid('constituent_id')->index();
            $table->ulid('benefit_id')->index();
            $table->boolean('status')->nullable()->index();
            $table->date('received_at')->index();
            $table->ulid('verified_by_id')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constituents_received_benefits');
    }
};
