<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Events\OrderPlaceNotification;

class OrderController extends Controller
{
    //
    public function myorder(){
                    
        try {
            
            $data = Order::where('user_id',auth()->user()->id)->get();
            if ($data) {
                return view('my_order',['orders'=>$data]);
            } else {
                return back()->with('message', "You Have Not Placed Any Order");
            }
        } catch (\Exception $e) {
            return back()->with('message', "You Have Not Placed Any Order");
        }
 

    }
    public function placeorder(Request $request){
                    
         try {
          //dd($request->all());
            $data = new Order;
            $data->item_name=$request->item_name;
            $data->item_code=$request->item_code;
            $data->price=$request->item_price;
            $data->image_url=$request->image;
            $data->category=$request->item_category;
            $data->quantity=$request->item_quantity;
            $data->Total_Price=(int)$request->item_price*(int)$request->item_quantity;
            $data->user_id=auth()->user()->id;
            $data->address=$request->address;
            $data->save();
            if ($data) {
              event(new OrderPlaceNotification(auth()->user(),$data));
           
                return redirect('/my-order');
            } else {
                dd("Hi ");
                return back()->with('message', "Item Deleted");
            }
        } catch (\Exception $e) {
           return back()->with('message', "Item Not Deleted");
      }
 

    }
    public function orderlist(){
                    
        try {
         //dd($request->all());
           $data =Order::get();
           //$data=$data->users();
         //  dd($data);
           if ($data) {
             return view('order_list',['orders'=>$data]);
           } 
           else {
            dd('else');   
            return back()->with('message', "Not any order Yet");
           }
       } 
       catch (\Exception $e) {
        dd('catch');  
        return back()->with('message', "Not Any order Yet");
        }


   }
}
