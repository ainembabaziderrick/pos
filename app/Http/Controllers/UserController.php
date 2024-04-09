<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function index(){
      $users = User::latest()->paginate(10);
    return view('users.index', compact('users'));
   }

   public function user_add(){
      
      return view('users.add');
     }

     public function user_add_insert(Request $request){
        $users = new User;
        $users->name = trim($request->name);
        $users->email = trim($request->email);
        $users->password = md5($request->password);
        $users->is_admin = trim($request->is_admin);
        $users->save();
      
      if ($users){
         return redirect('admin/users')->with('success', 'User successfully created');
      
      }

      return redirect()->back()->with('error', 'User not  created');

      
  }

  public function EditUser($id){
   $user = User::find($id);
   return view('users.edit', compact('user'));

}

public function UpdateUser(Request $request, $id){

$update =   User::find($id)->update([
       'name' => $request->name,
       'email' => $request->email,
      //  'password' => $request->password,
       'is_admin' => $request->is_admin,
              
   ]);
   return redirect('admin/users')->with('success','User Updated succcessfully');

}

public function DeleteUser($id){
   $delete = User::find($id)->Delete();
   return Redirect()->back()->with('success','About Deleted succcessfully');
}


}
