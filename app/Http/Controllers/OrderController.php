<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order; // Imposed your Order model right here

class OrderController extends Controller
{
    public function index()
    {
        // 1. Handle the Header Cart Badge Notification Count
        if (Auth::id()) {
            $user_id = Auth::id();
            $count = Cart::where('user_id', $user_id)->count();

            
            $order = Order::where('user_id', $user_id)->get();
        } else {
            $count = 0;
            $order = [];
        }

        // Pass both variables down to your blade file
        return view('myorder', compact('count', 'order'));
    }
}