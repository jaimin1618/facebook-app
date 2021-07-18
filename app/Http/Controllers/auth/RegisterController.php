<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Validator;


class RegisterController extends Controller
{
    public function index () {
        return view('auth.signup');
    }
    
    public function store (Request $req) {
        
        $this->validate($req, [
            'firstname' => 'required|max:30',
            'lastname' => 'required|max:30',
            'email' => 'required|max:255',
            'password' => 'required|confirmed',
            'gender' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $dateOfBirth = $req->dob_y."-". $req->dob_m."-".$req->dob_d;
        $sr = date("m_d_y-G_i_s", time());
        // $imageName = $sr.'.'.$req->image->extension();
        $imageName = $req->email . "." . $req->image->extension();
        $req->image->storeAs('images', $imageName); // inside public
        
        
        
        $user = User::create([
            'first_name' => $req->firstname,
            'last_name' => $req->lastname,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'gender' => $req->gender,
            'date_of_birth' => $dateOfBirth,
            'image_address' => 'storage/app/images/' . $imageName
        ]);
        
        $ele = $req->email;
                        
        // ---SIGN IN PART---
        auth()->attempt($req->only('email', 'password'));
        // dd($ele);
        return redirect()->route('about');
    }
}
