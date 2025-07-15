<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained()->onDelete('cascade');
            $table->string('package_name');
            $table->decimal('single_package_price', 10, 2);
            $table->decimal('couple_package_price', 10, 2);
            $table->string('package_picture');
            $table->integer('package_days');
            $table->text('package_description');
            $table->longText('package_long_description')->nullable();
            $table->timestamps();
        });

        // Create a table for package images
        Schema::create('package_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained()->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_images');
        Schema::dropIfExists('packages');
    }
};

