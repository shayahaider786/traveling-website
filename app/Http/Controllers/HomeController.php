<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Gallery;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $destinations = Destination::count();
        $packages = Package::count();
        $galleries = Gallery::count();
        $contacts = Contact::count();

        return view('backend.index', compact(
            'destinations',
            'packages',
            'galleries',
            'contacts'
        ));
    }
    public function contactList()
    {
        $contacts = Contact::all();
        return view('backend.contactList', compact('contacts'));
    }
    public function contactDestroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
}
