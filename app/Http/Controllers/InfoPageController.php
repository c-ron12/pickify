<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class InfoPageController extends Controller
{
    // Helper function to get cart count so we don't repeat code
    private function getCartCount()
    {
        return Auth::check() ? Cart::where('user_id', Auth::id())->count() : 0;
    }

    public function returns()
    {
        $count = $this->getCartCount();
        return view('returns', compact('count'));
    }

    public function shipping()
    {
        $count = $this->getCartCount();
        return view('shipping', compact('count'));
    }

    public function support()
    {
        $count = $this->getCartCount();
        return view('support', compact('count'));
    }
}