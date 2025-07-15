<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'gallery_picture',
    ];

    /**
     * Get the destination that owns the gallery image.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}