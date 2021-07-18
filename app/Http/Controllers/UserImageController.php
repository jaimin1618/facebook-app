<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Image;

class UserImageController extends Controller
{
    public function index () {
        return view('users.profile');
    }
    
    public function profile ($id) {
        // dd($id);
        $user = User::find($id);
        // dd($user);
        return view('users.profile_status', [
            'user' => $user
        ]);
        
    }
    
}
