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
        Schema::create('patients_quizzes', function (Blueprint $table) {
            $table->id();
            $table->enum('drink', ['yes', 'no']);
            $table->enum('prosthesis', ['yes', 'no']);

            $table->enum('is_left_handed', ['yes', 'no']);
            $table->enum('drug_addict', ['yes', 'no']);

            $table->enum('physical_activity', ['yes', 'no']);
            $table->enum('smokes', ['yes', 'no']);

            $table->enum('high_pressure', ['yes', 'no']);
            $table->enum('low_pressure', ['yes', 'no']);

            $table->enum('diet', ['yes', 'no']);
            $table->enum('allergy', ['yes', 'no']);
            $table->text('allergy_which')->nullable();

            $table->enum('is_undergoing_medical_psychological_treatment', ['yes', 'no']);
            $table->enum('continuous_medicine', ['yes', 'no']);

            $table->enum('performed_a_surgical_procedure', ['yes', 'no']);
            $table->text('when')->nullable();
            $table->enum('general_anesthesia', ['yes', 'no']);

            $table->enum('implanted_device', ['yes', 'no']);
            $table->enum('suffered_accident', ['yes', 'no']);
            $table->text('when')->nullable();
            $table->text('as')->nullable();

            $table->enum('have_you_ever_had_spiritual_treatment?', ['yes', 'no']);
            $table->enum('sleep_well', ['yes', 'no']);

            $table->enum('have_conscious_trauma', ['yes', 'no']);
            $table->text('which')->nullable();
            $table->text('infancy')->nullable();
            $table->text('adolescence')->nullable();
            $table->text('current_age')->nullable();

            $table->foreignId('patient_id')->constrained('patients')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients_quizzes');
    }
};
