<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('backend.destination', compact('destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination_name' => 'required|string|max:255',
            'destination_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store the image directly in public/destination folder
        $image = $request->file('destination_picture');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('destination');
        
        // Create directory if it doesn't exist
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        
        $image->move($destinationPath, $imageName);
        $imagePath = 'destination/' . $imageName;

        Destination::create([
            'destination_name' => $request->destination_name,
            'destination_picture' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Destination created successfully');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        $destinations = Destination::all();
        return view('backend.destination-edit', compact('destination', 'destinations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'destination_name' => 'required|string|max:255',
            'destination_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $destination = Destination::findOrFail($id);

        if ($request->hasFile('destination_picture')) {
            // Delete old image
            if ($destination->destination_picture) {
                $oldImagePath = public_path($destination->destination_picture);
                if (File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }
            }
            
            // Store new image
            $image = $request->file('destination_picture');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('destination');
            $image->move($destinationPath, $imageName);
            $imagePath = 'destination/' . $imageName;
            
            $destination->destination_picture = $imagePath;
        }

        $destination->destination_name = $request->destination_name;
        $destination->save();

        return redirect()->route('admin.destinations')->with('success', 'Destination updated successfully');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        
        // Delete the image
        if ($destination->destination_picture) {
            $imagePath = public_path($destination->destination_picture);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
        
        $destination->delete();

        return redirect()->back()->with('success', 'Destination deleted successfully');
    }

    
}

