<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::get();
        return view('admin.user.index',compact('users'));
    }
    public function setRole(Request $request){
        $user = User::find($request->id);
        $role = $user->role;
        if($role == 1){
            DB::table('users')->where('id',$request->id)->update([
                'role' => 0,
                'updated_at' => now()
            ]);
        }else{
            DB::table('users')->where('id',$request->id)->update([
                'role' => 1,
                'updated_at' => now()
            ]);
        }
        return redirect()->back();
    }
}
