<?php

namespace App\Models\Rosemary;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patients extends Model
{
    use HasFactory;
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function patients_data(): HasMany
    {
        return $this->hasMany(PatientsData::class);
    }
    public function patients_data_other(): HasMany
    {
        return $this->hasMany(PatientsDataOther::class);
    }
    public function patients_descriptions(): HasMany
    {
        return $this->hasMany(PatientsDescriptions::class);
    }
    public function patients_quiz(): HasMany
    {
        return $this->hasMany(PatientsQuiz::class);
    }
    public function patients_treatments(): HasMany
    {
        return $this->hasMany(PatientsTreatments::class);
    }
}
