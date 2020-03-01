<?php

namespace App\Http\Controllers\website;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class PasswordController extends Controller
{
    public function index(){
        return view('admin.password.index');
    }

    public function update(Request $request){
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', '=', $request->email)
                ->update(['password'=> Hash::make($request->password)]);
        return Redirect::back()->with('success', 'Update successfully');
    }
}
