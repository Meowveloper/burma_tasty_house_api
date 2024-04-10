<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recipe extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'description',
        'preparation_time',
        'difficulty_level'
    ];

    public function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, 'recipe_tags');
    }

    public function ingredients() : BelongsToMany {
        return $this->belongsToMany(Ingredient::class,'recipe_ingredients');
    }

    public function steps() : HasMany
    {
        return $this->hasMany(Step::class);
    }

    public function comments() : HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function favourites() :HasMany
    {
        return $this->hasMany(Favourite::class);
    }

    public function ratings() : HasMany
    {
        return $this->hasMany(Rating::class);
    }
}
