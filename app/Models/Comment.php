<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        "comment",
        "status"
    ];

    public function recipe() : BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function reports() : HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
