<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function getCategoryUsageCount() : int
    {
        return $this->contents->count();
    }

    /**
     * Get all of the contents for the category.
     */
    public function contents() : HasMany
    {
        return $this->hasMany(Content::class);
    }
}
