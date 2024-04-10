<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'rating'
    ];

    public function recipe() : BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
