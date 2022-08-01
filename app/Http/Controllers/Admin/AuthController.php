<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email',$req->email)->first();

        if(! empty($user))
        {
            if(Hash::check($req->password, $user->password))
            {
                if($user->role == 1)
                {
                    $req->session()->put('admin_login',true);
                    $req->session()->put('name',$user->name);
                    $req->session()->put('id',$user->id);

                    return redirect('/dashboard');
                }
            }
            else 
            {
                $req->session()->flash('error','Invalid Password');
                return redirect("/");
            }
        }
        else 
        {
            $req->session()->flash('error','Invalid Email');
            return redirect("/");
        }

    }
}
