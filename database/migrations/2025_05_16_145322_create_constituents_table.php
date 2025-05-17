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
        Schema::create('constituents', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('name_extension')->nullable();
            $table->unsignedTinyInteger('age_this_year');
            $table->date('date_of_birth');
            $table->string('cellphone_number', 11)->nullable();
            $table->ulid('barangay_id')->index();
            $table->ulid('city_id')->index();
            $table->string('occupation');
            $table->unsignedSmallInteger('monthly_salary')->default(0);
            $table->string('precint_code')->nullable();
            $table->string('voter_type');
            $table->string('valid_id_type')->nullable();
            $table->string('valid_id_number')->nullable();
            $table->string('member_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constituents');
    }
};
