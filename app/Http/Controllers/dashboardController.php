<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //
    public function show(){
        $itemdata=Item::all();
      //return view('tets_nav',['items'=>$itemdata]);
      //  return view('tets_nav',['items'=>$itemdata]);
    
       return view('dashboard_item',['items'=>$itemdata]);
    }
}
