<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\OrderPlaceNotification;

class OrderController extends Controller
{
    
    public function myorder()
    {

        try {

            $data = Order::where('user_id', auth()->user()->id)->get();
            if ($data) {
                return view('order.my_order', ['orders' => $data]);
            } else {
                return back()->with('message', "You Have Not Placed Any Order");
            }
        } catch (\Exception $e) {
            return back()->with('message', "You Have Not Placed Any Order");
        }

    }
    public function placeorder(Request $request)
    {
        try {
            $data = new Order;
            $minus=Item::where('item_code',$request->item_code)->get();
            if($minus[0]->available_piece>=$request->item_quantity){
                $minus[0]->available_piece=$minus[0]->available_piece-$request->item_quantity;
                $minus[0]->save();
                $minus=Item::where('item_code',$request->item_code)->get();
                $data->item_name = $request->item_name;
                $data->item_code = $request->item_code;
                $data->price = $request->item_price;
                $data->image_url = $request->image;
                $data->category = $request->item_category;
                $data->quantity = $request->item_quantity;
                $data->Total_Price = (int) $request->item_price * (int) $request->item_quantity;
                $data->user_id = auth()->user()->id;
                $data->address = $request->address;
                $data->save();
                if ($data) {
                    event(new OrderPlaceNotification(auth()->user(), $data));
                    return redirect('/my-order');
                } 
                else {
                    return redirect('/dashboard-item')->with('message', "Not Available");
                }
            
            }
            else{
                return redirect('/dashboard-item')->with('message', "Not Available");
            }
          
        } catch (\Exception $e) {
            return redirect()->with('message', "Not Available");
        }
        
    }
    public function orderlist()
    {

        try {
            //dd($request->all());
            $data = Order::get();
            //$data=$data->users();
            //  dd($data);
            if ($data) {
                return view('order.order_list', ['orders' => $data]);
            } else {
                dd('else');
                return back()->with('message', "Not any order Yet");
            }
        } catch (\Exception $e) {
            dd('catch');
            return back()->with('message', "Not Any order Yet");
        }
    }
    public function pendingorder()
    {

        try {
            //dd($request->all());
            $data = Order::where('received', 0)->get();
            // dd($data);
            //$data=$data->users();
            //  dd($data);
            if ($data) {
                return view('order.pending_order', ['orders' => $data]);
            } else {
                // dd('else');
                return back()->with('message', "Not any order Yet");
            }
        } catch (\Exception $e) {
            // dd('catch');
            return back()->with('message', "Not Any order Yet");
        }
    }
    public function deliverorder()
    {

        try {
            //dd($request->all());
            $data = Order::where('received', 1)->get();
            // dd($data);
            //$data=$data->users();
            //  dd($data);
            if ($data) {
                return view('order.deliver_order', ['orders' => $data]);
            } else {
                // dd('else');
                return back()->with('message', "Not any order Yet");
            }
        } catch (\Exception $e) {
            // dd('catch');
            return back()->with('message', "Not Any order Yet");
        }
    }
    public function receivedrorder($id)
    {

        try {
            $data = Order::find($id);
            $data->received = 1;
            $data->save();
            if ($data) {
                $data = Order::where('received', 1)->get();
                return redirect('/dashboard-item');
            } else {
                return back()->with('message', "Not any order Yet");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Not Any order Yet");
        }
    }
}
