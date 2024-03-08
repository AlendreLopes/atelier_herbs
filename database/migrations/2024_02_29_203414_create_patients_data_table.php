<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients_data', function (Blueprint $table) {
            $table->id();
            $table->string('zip_code');
            $table->string('address');
            $table->string('address_number');
            $table->string('address_complement');
            $table->string('neighbor');
            $table->string('city');
            $table->string('state');
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_data');
    }
};
