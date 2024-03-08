<?php

namespace App\Models\Herbariums;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class HerbsType extends Model
{
    use HasFactory;
    function hers(): HasMany
    {
        return $this->hasMany(Herbs::class);
    }
    function users(): BelongsTo
    {
        return $this->belongsTo(User::class);

    }
}
