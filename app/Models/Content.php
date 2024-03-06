<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Content extends Model
{
    use HasFactory;

    protected $dates = ['published_at'];

    protected $fillable = [
        'title',
        'body',
        'resource_id',
        'category_id',
        'thumbnail',
        'published_at',
        'views'
    ];


    /**
     * Get the resource that owns the content.
     */
    public function resource() : BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    /**
     * Get the category that owns the content.
     */
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }



    /**
     * Get all of the keywords for the Content.
     */
    public function keywords()
    {
        return $this->hasMany(ContentKeyword::class, 'content_id');
    }

    /**
     * Accessor for the 'thumbnail' attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getThumbnailAttribute($value)
    {
        return Storage::disk('public')->url($value);
    }
}
