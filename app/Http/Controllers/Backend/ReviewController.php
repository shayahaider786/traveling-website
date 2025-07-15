<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the reviews.
     */
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        return view('backend.reviews.index', compact('reviews'));
    }

    /**
     * Approve a review.
     */
    public function approve($id)
    {
        $review = Review::findOrFail($id);
        $review->is_approved = true;
        $review->save();

        return redirect()->back()->with('success', 'Review approved successfully');
    }

    /**
     * Reject a review.
     */
    public function reject($id)
    {
        $review = Review::findOrFail($id);
        $review->is_approved = false;
        $review->save();

        return redirect()->back()->with('success', 'Review rejected successfully');
    }

    /**
     * Remove the specified review.
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->back()->with('success', 'Review deleted successfully');
    }
}