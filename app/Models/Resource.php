<?php

namespace App\Models;

use App\Enums\LibraryTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = ['keyword', 'type', 'path'];

    protected $casts = [
        'type' => LibraryTypeEnum::class,
    ];

    /**
     * Accessor for the 'path' attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getPathAttribute($value)
    {
        // Local types for which to generate the full path
        $localTypes = [LibraryTypeEnum::Image, LibraryTypeEnum::GIF, LibraryTypeEnum::Video];

        // Check if the type is in the local types array
        if (in_array($this->type, $localTypes)) {
            return Storage::disk('public')->url($value);
        }

        // For other types, return the original value
        return $value;
    }
}
