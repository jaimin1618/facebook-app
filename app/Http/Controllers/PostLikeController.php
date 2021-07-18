<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
    public function store (Post $post, Request $req) {
        if ($post->likedBy($req->user())) {
            return response(null, 409);
        }
        
        $post->likes()->create([
			'user_id' => $req->user()->id
		]);
        
        return back();
        
    }
    
    
    public function destroy (Post $post, Request $request) {
        $post->likes()->where('post_id', $post->id)->delete();
		return back();
	}
	
}
