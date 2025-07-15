<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Review;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $destinations = Destination::with('galleries')->get();
        $packages = Package::all();
        $galleries = Gallery::all();
        $reviews = Review::where('is_approved', true)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();
        return view('frontend.index', compact('destinations', 'packages', 'galleries', 'reviews'));
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function service()
    {
        $reviews = Review::where('is_approved', true)
                    ->orderBy('created_at', 'desc')
                    ->take(4)
                    ->get();
        return view('frontend.service', compact('reviews'));
    }
    public function destinations()
    {
        $destinations = Destination::with('galleries')->get();
        return view('frontend.destination', compact('destinations'));
    }

    public function packages()
    {
        $packages = Package::all();
        return view('frontend.packges' , compact('packages'));
    }

    public function packageDetail($slug)
    {
        $package = Package::with('destination')->where('slug', $slug)->firstOrFail();
        return view('frontend.packageDetail', compact('package'));
    }

    public function contactUs()
    {
        return view('frontend.contactUs');
    }
    public function contactUsSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required',
        ]);

        // Create a new contact record
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->subject = $request->subject;
        $contact->save();

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    /**
     * Display the gallery page.
     */
    public function gallery()
    {
        $destinations = Destination::with('galleries')->get();
        $galleries = Gallery::with('destination')->get();
        return view('frontend.gallery', compact('destinations', 'galleries'));
    }
}






