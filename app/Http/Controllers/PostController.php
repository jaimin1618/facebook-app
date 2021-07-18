<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index () {
        // $posts = Post::orderBy('created_at', 'desc')->get()->pagination(1);
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        return view('posts.index', [
            'posts' => $posts
        ]);
    }
        
    public function store (Request $req) {
        $this->validate($req, [
            'body' => 'required'
        ]);
        
        $req->user()->posts()->create($req->only('body'));
        return back();
    }
    
    public function destroy (Post $post) {
        $post->delete();
        return back();
    }
}

