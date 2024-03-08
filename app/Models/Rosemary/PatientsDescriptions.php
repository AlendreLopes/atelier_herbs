<?php

namespace App\Models\Rosemary;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PatientsDescriptions extends Model
{
    use HasFactory;
    public function patients(): BelongsTo
    {
        return $this->belongsTo(Patients::class);
    }
}
