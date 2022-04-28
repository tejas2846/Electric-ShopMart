<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function showcart()
    {
        $data = Cart::all();
        $data = Cart::with('items')->where('user_id', auth()->user()->id)->get()->toArray();
        return view('cart_list', ['items' => $data]);
    }
    public function addcart($id)
    {
        $data = Cart::with('items')->where('user_id', auth()->user()->id)->where('item_id',$id)->first();
        if ($data) {
            // dd('if');
            return redirect('/show-cart');

        } else {
            // dd('else');
           
            $data = new Cart;
            $data->user_id = auth()->user()->id;
            $data->item_id = $id;
            $data->save();
            return redirect('/show-cart');
        }

    }

    public function usercart()
    {
        $data = Cart::with('items')->where('user_id', auth()->user()->id)->first();
        return view('cart_list', ['items' => $data]);
    }
    public function deletecart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect('/show-cart');
    }
}
