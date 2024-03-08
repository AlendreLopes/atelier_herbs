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
        Schema::create('patients_data_others', function (Blueprint $table) {
            $table->id();
            $table->string('indication_of_the_house');
            $table->text('reason_for_consultation')->nullable();
            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_data_others');
    }
};
