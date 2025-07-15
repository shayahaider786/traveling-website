<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_name',
        'destination_picture',
    ];

    /**
     * Get the gallery images for the destination.
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    /**
     * Get the packages for the destination.
     */
    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}

