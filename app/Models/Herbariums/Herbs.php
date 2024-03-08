<?php

namespace App\Models\Herbariums;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Herbs extends Model
{
    use HasFactory;
    function herbs_type(): BelongsTo
    {
        return $this->belongsTo(HerbsType::class);

    }
    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function herbs_images(): HasMany
    {
        return $this->hasMany(HerbsImages::class);
    }
    public function herbs_tips(): HasMany
    {
        return $this->hasMany(HerbsTips::class);
    }
    public function herbs_videos(): HasMany
    {
        return $this->hasMany(HerbsVideos::class);
    }
}
