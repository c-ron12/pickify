<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;
use App\Models\ContactUs;

class ContactusController extends Controller
{
    public function contact_us () 
    {
        if (Auth::id()) {
            $user = Auth::user();  // gets logged in user
            $user_id = $user->id;  // extracts the id of logged in user and assigns it to $user_id variableS

            $count = Cart::where('user_id', $user_id)->count();  // counts the number of products in the cart of the logged in user
        } else {
            $count = 0;
        }
        return view ('contact_us', compact('count'));
    }

    public function store (Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email|max:60',
            'phone' => 'required|string|max:15|regex:/^[\+\-0-9\s\(\)]{10,20}$/',
            'message' => 'nullable|string|max:2000',
        ]);

       if (Auth::check()) {
           $validatedData['user_id'] = Auth::id();
       }

       ContactUs::create($validatedData);

       session()->flash('toastr', 'Message sent successfully.');
       return redirect()->back();
    }   

}
