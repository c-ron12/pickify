<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Testimonial;
use Auth;

class TestimonialController extends Controller
{
    public function testimonial()
    {
        $testimonials = Testimonial::all();
        if (Auth::id()) {
            $user = Auth::user();  // gets logged in user
            $user_id = $user->id;  // extracts the id of logged in user and assigns it to $user_id variableS

            $count = Cart::where('user_id', $user_id)->count();  // counts the number of products in the cart of the logged in user
        } else {
            $count = 0;
        }
        return view('testimonial', compact('count', 'testimonials'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'content' => 'required|string|max:1000',
            'rating' => 'nullable|integer|between:1,5'
        ]);

        // Set a default value for the rating field if it's not present
        $rating = $validatedData['rating'] ?? 0;

        // Create the testimonial with all required fields
        Testimonial::create([
            'user_id' => auth()->id(),
            'content' => $validatedData['content'],
            'rating' => $rating
        ]);

        session()->flash('toastr', 'Testimonial submitted successfully.');

        return redirect()->back();
    }
}
