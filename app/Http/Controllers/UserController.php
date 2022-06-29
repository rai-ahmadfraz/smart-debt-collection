<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function openAccount(){
        return view('user.accounts')->with('users',User::all());
    }
    public function addNewUser(){
        return view('user.create_user');
    }
    public function storeNewUser(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            return redirect()->back()->with('error', 'Email already exists');
        }else{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' =>  $request->role,
                'contact_no' => $request->contact_no,
                'address' => $request->address
            ]);
            return redirect('/accounts')->with('success', 'User created successfully');
        }
    }
    public function updateUserDetail($id){
        $user = User::where('id',$id)->first();
        if($user){
            return view('user.update_user')->with('user',$user);   
        }else{
            return redirect()->back()->with('error', 'User not exists with this id');
        }
    }
    public function updateUser(Request $request){
        $user = User::where('id',$request->id)->first();
        if($user){
            if($request->name){
                $user->name = $request->name;
            }
            if($request->password){
                $user->password = Hash::make($request->password);
            }
            if($request->contact_no){
                $user->contact_no = $request->contact_no;
            }
            if($request->address){
                $user->address = $request->address;
            }
            $user->save();
            return redirect('/accounts')->with('users',User::all());
        }else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function changeUserRole($id){
        $user = User::where('id',$id)->first();
        if($user){
            if($user->role){
                $user->role = 0;
            }else{
                $user->role = 1;
            }
            $user->save();
        }
        return redirect()->back()->with('success', 'User role changed successfully');
    }
    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        if($user){
            $user->delete();
        }
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}
