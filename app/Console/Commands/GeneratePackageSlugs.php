<?php

namespace App\Console\Commands;

use App\Models\Package;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GeneratePackageSlugs extends Command
{
    protected $signature = 'packages:generate-slugs';
    protected $description = 'Generate slugs for existing packages';

    public function handle()
    {
        $packages = Package::whereNull('slug')->orWhere('slug', '')->get();

        $this->info("Found {$packages->count()} packages without slugs.");

        foreach ($packages as $package) {
            $slug = Str::slug($package->package_name);
            $originalSlug = $slug;
            $count = 1;

            while (Package::where('slug', $slug)->where('id', '!=', $package->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $package->slug = $slug;
            $package->save();

            $this->info("Generated slug '{$slug}' for package '{$package->package_name}'");
        }

        $this->info('All slugs generated successfully!');

        return Command::SUCCESS;
    }
}

