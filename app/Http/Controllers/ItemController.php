<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    public function additem(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        //  dd('added');
        $imageName = time() . '.' . $request->file('image')->extension();
        try {
            $data = new Item;
            $data->item_name = $request->item_name;
            $data->item_code = $request->item_code;
            $data->price = $request->item_price;
            $data->image_url = $imageName;
            $data->category = $request->item_category;
            $data->available_piece = $request->item_quantity;
            $save = $data->save();

            if ($save) {
                $request->file('image')->storeAs('public/images', $imageName);
                return redirect()->back()->with('message', 'IT WORKS!');
            } else {

                return back()->with('message', "Item Not Added");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Item Not Added");
        }
    }

    public function deleteitem($id)
    {
        try {
            $data = Item::find($id);
            unlink('storage/images/' . $data->image_url);
            $delete = $data->delete();

            if ($delete) {
                return back()->with('message', 'IT WORKS!');
            } else {

                return back()->with('message', "Item Deleted");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Item Not Deleted");
        }

        return redirect("/dashboard-item");

    }

    public function finditem(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        try {
            $item = item::where('item_name', 'like', '%' . $request->name . '%')->get();
            //dd(count($item));

            if (empty($item)) {
                dd($item);

                return back()->with('message', "ITEM NOT FOUND");
            }
            if (count($item)) {
                // return Redirect::route('dashboard-item', array('items' => $item));
                return view('dashboard_item', ['items' => $item]); //->with('items', $item);
            } else {
                return back()->with('message', "ITEM NOT FOUND");
            }
        } catch (\Exception $e) {
            return back()->with('message', "ITEM NOT FOUND");
        }

    }
    public function updateItem($id)
    {
        try {
            $data = Item::find($id);
            //  dd($data);
            if ($data) {
                return view('update_item', ['item' => $data]);
            } else {

                return back()->with('message', "Item not Selected");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Item Not Seleted");
        }

    }
    public function saveupdateItem(Request $request)
    {
        try {
            $data = Item::find($request->id);
            //  dd($data);
            if ($data) {
                $data->item_name = $request->item_name;
                $data->item_code = $request->item_code;
                $data->price = $request->item_price;
                $data->category = $request->item_category;
                $data->available_piece = $request->item_quantity;
                $data->save();
                $data = Item::all();
                return redirect('/dashboard-item');
            } else {

                return back()->with('message', "Item not Selected");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Item Not Seleted");
        }

    }
    public function orderitem($id)
    {
        try {
            $data = Item::find($id);

            if ($data) {
                return view('cart_item', ['item' => $data]);
            } else {

                return back()->with('message', "Item Deleted");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Item Not Deleted");
        }

        return redirect("/dashboard-item");

    }
    public function categorywiseitem($name)
    {
        try {
            $data = Item::where('category', $name)->get();

            if ($data) {
                //return redirect('/category');
                return view('dashboard_item', ['items' => $data]);
            } else {

                return back()->with('message', "Category Not Found");
            }
        } catch (\Exception $e) {
            return back()->with('message', "Category Not Deleted");
        }

        return redirect("/dashboard-item");

    }

}
