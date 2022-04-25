<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(){
  //      dd('hello');
    $user =User::get();
    return view('user_list',['users'=>$user]); 
   }
   public function updateuser(){
     return view('update_user',['user'=>auth()->user()]);
   }
   public function saveupdateuser(Request $request){
//dd($request->all());
try{
$user=User::find(auth()->user()->id);
    $data=$user->update(['name'=>$request->name,'email'=>$request->email,'password'=>$request->password]);
    if($data){
      // return back()->with('message','User Success  Updated');
    //
    return redirect('dashboard-item');
    }
    else{
      return back()->with('message','User Not   Updated');
    }
  }
  catch(\Exception $e){
       return redirect('dashboard-item');
  }
}
public function deleteuser($id){
  try{
     $user=User::find($id);
     $data=$user->delete();
     if($data){
        // return back()->with('message','User Success  Updated');
      //
      return redirect('/user-list');
      }
      else{
        return back()->with('message','User Not   Updated');
      }
    }
    catch(\Exception $e){
         return redirect('dashboard-item');
    }
  }
}

