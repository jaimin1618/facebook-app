<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;

class ImageUploadController extends Controller
{
    public function index () {
        return view('auth.image_upload');
    }
    
    public function store (Request $req) {
        
        $req->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $sr = date("m_d_y-G_i_s", time());
        
        $imageName = $sr.'.'.$req->image->extension();
        $req->image->storeAs('images', $imageName); // inside public
        
        
        // Image::create([
        //     'email' => auth()->user()->email,
        //     'image_addr' => asset('storage/app/images/')."/".$imageName
        // ]);
        
        
        auth()->user()->image()->create($req->only(asset('storage/images/')."/".$imageName));
        
        return back()->with('success', 'image uploaded')
                     ->with('image', $imageName);
    }
}
