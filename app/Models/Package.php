<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'package_name',
        'slug',
        'single_package_price',
        'couple_package_price',
        'package_picture',
        'package_days',
        'package_description',
        'package_long_description',
    ];

    /**
     * Get the destination that owns the package.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * Get the images for the package.
     */
    public function images()
    {
        return $this->hasMany(PackageImage::class);
    }
}

