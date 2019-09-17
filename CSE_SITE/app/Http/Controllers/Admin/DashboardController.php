<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class DashboardController extends Controller
{
    //

    public function registerd()
    {

        $users = User::all();
        return view('admin.register')->with('users',$users);
        
    }

    public function addUser(Request $request){

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('dashboard/register');

    }


    public function registeredit(Request $request,$id)
    {

        $user = User::findOrFail($id);

        return view('admin.register-edit')->with('user',$user);

    }

    public function registerupdate(Request $request,$id){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->update();

      

        return redirect('/dashboard/register')->with('status','User is Updated');
    }

    public function deleteUser($id){

        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/dashboard/register')->with('status','User is Deleted');

        
    }
    
}
