<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use App\Models\PackageImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the packages.
     */
    public function index()
    {
        $packages = Package::with('destination')->get();
        return view('backend.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new package.
     */
    public function create()
    {
        $destinations = Destination::all();
        return view('backend.packages.create', compact('destinations'));
    }

    /**
     * Store a newly created package in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'package_name' => 'required|string|max:255',
            'single_package_price' => 'required|numeric|min:0',
            'couple_package_price' => 'required|numeric|min:0',
            'package_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:6144', // 6MB
            'package_days' => 'required|integer|min:1',
            'package_description' => 'required|string',
            'package_long_description' => 'nullable|string',
            'package_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6144', // 6MB
        ]);

        // Generate a unique slug
        $slug = Str::slug($request->package_name);
        $originalSlug = $slug;
        $count = 1;

        // Check if the slug already exists
        while (Package::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        // Store the main image
        $image = $request->file('package_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $packagePath = public_path('packages');

        // Create directory if it doesn't exist
        if (!File::exists($packagePath)) {
            File::makeDirectory($packagePath, 0755, true);
        }

        $image->move($packagePath, $imageName);
        $imagePath = 'packages/' . $imageName;

        // Create the package
        $package = Package::create([
            'destination_id' => $request->destination_id,
            'package_name' => $request->package_name,
            'slug' => $slug,
            'single_package_price' => $request->single_package_price,
            'couple_package_price' => $request->couple_package_price,
            'package_picture' => $imagePath,
            'package_days' => $request->package_days,
            'package_description' => $request->package_description,
            'package_long_description' => $request->package_long_description,
        ]);

        // Store additional images if any
        if ($request->hasFile('package_images')) {
            foreach ($request->file('package_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($packagePath, $imageName);
                $additionalImagePath = 'packages/' . $imageName;

                // Create package image record
                $package->images()->create([
                    'image_path' => $additionalImagePath
                ]);
            }
        }

        return redirect()->route('admin.packages.index')->with('success', 'Package created successfully');
    }

    /**
     * Display the specified package.
     */
    public function show($id)
    {
        $package = Package::with('destination')->findOrFail($id);
        return view('backend.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified package.
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $destinations = Destination::all();
        return view('backend.packages.edit', compact('package', 'destinations'));
    }

    /**
     * Update the specified package in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'package_name' => 'required|string|max:255',
            'single_package_price' => 'required|numeric|min:0',
            'couple_package_price' => 'required|numeric|min:0',
            'package_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6144', // 6MB
            'package_days' => 'required|integer|min:1',
            'package_description' => 'required|string',
            'package_long_description' => 'nullable|string',
            'package_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:6144', // 6MB
        ]);

        $package = Package::findOrFail($id);

        // Generate a new slug if the name has changed
        if ($package->package_name != $request->package_name) {
            $slug = Str::slug($request->package_name);
            $originalSlug = $slug;
            $count = 1;

            // Check if the slug already exists (excluding the current package)
            while (Package::where('slug', $slug)->where('id', '!=', $id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            $package->slug = $slug;
        }

        if ($request->hasFile('package_picture')) {
            // Delete old image
            if ($package->package_picture) {
                $oldImagePath = public_path($package->package_picture);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }

            // Store new image
            $image = $request->file('package_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $packagePath = public_path('packages');
            $image->move($packagePath, $imageName);
            $imagePath = 'packages/' . $imageName;

            $package->package_picture = $imagePath;
        }

        // Store additional images if any
        if ($request->hasFile('package_images')) {
            foreach ($request->file('package_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $packagePath = public_path('packages');
                $image->move($packagePath, $imageName);
                $additionalImagePath = 'packages/' . $imageName;

                // Create package image record
                $package->images()->create([
                    'image_path' => $additionalImagePath
                ]);
            }
        }

        // Delete images if requested
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $packageImage = $package->images()->find($imageId);
                if ($packageImage) {
                    // Delete the image file
                    $imagePath = public_path($packageImage->image_path);
                    if (File::exists($imagePath)) {
                        File::delete($imagePath);
                    }
                    // Delete the record
                    $packageImage->delete();
                }
            }
        }

        $package->destination_id = $request->destination_id;
        $package->package_name = $request->package_name;
        $package->single_package_price = $request->single_package_price;
        $package->couple_package_price = $request->couple_package_price;
        $package->package_days = $request->package_days;
        $package->package_description = $request->package_description;
        $package->package_long_description = $request->package_long_description;
        $package->save();

        return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully');
    }

    /**
     * Remove the specified package from storage.
     */
    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        // Delete the image
        if ($package->package_picture) {
            $imagePath = public_path($package->package_picture);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $package->delete();

        return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully');
    }
}

