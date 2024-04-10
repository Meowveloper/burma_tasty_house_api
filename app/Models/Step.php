<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'image',
        'sequence_number'
    ];

    public function recipe() : BelongsTo
    {
        return $this->belongsTo(Recipe::class);
    }
}
