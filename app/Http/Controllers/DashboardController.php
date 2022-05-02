<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;

class DashboardController extends Controller
{
    
    public function show()
    {
        $itemdata = Item::all();
        $cart=Cart::where('user_id',auth()->user()->id)->count();
        return view('dashboard_item', ['items' => $itemdata]);
    }
}
