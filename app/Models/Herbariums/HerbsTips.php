<?php

namespace App\Models\Herbariums;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HerbsTips extends Model
{
    use HasFactory;
    public function herbs(): BelongsTo
    {
        return $this->belongsTo(Herbs::class);
    }

}
