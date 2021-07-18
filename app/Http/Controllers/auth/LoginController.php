<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index () {
        return view('auth.login');
    }
    
    public function store (Request $req) {
        $this->validate($req, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        
        // LOG IN USER
        $user = auth()->attempt($req->only('email', 'password'), $req->remember);
        if (!$user) {
            return back()->with('status', 'Invalid Login Credentials');
        }
        
        return redirect()->route('posts.index');
    }
    
    
    
}
