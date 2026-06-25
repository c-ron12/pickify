<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;

class FaqsController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $user = Auth::user();  
            $user_id = $user->id;  

            $count = Cart::where('user_id', $user_id)->count();  
        } else {
            $count = 0;
        }
        return view('faqs', compact('count'));
    }
}
