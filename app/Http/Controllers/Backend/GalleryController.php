<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        $galleries = Gallery::with('destination')->get();
        return view('backend.gallery', compact('destinations', 'galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination_id' => 'required|exists:destinations,id',
            'gallery_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image directly in public/gallery folder
        $image = $request->file('gallery_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $galleryPath = public_path('gallery');
        
        // Create directory if it doesn't exist
        if (!File::exists($galleryPath)) {
            File::makeDirectory($galleryPath, 0755, true);
        }
        
        $image->move($galleryPath, $imageName);
        $imagePath = 'gallery/' . $imageName;

        Gallery::create([
            'destination_id' => $request->destination_id,
            'gallery_picture' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Gallery image added successfully');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        // Delete the image
        if ($gallery->gallery_picture) {
            $imagePath = public_path($gallery->gallery_picture);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        
        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery image deleted successfully');
    }
}