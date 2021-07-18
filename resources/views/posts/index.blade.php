@extends('layouts.app')
@section('content')
    
    <link rel="stylesheet" href="{{asset('resources/css/posts_style.css')}}" type="text/css">
    
    <div class="container">
        <div class="">
            
            
            @auth
                <form  action="{{route('posts.store')}}" method="post" class="mb-4">
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" @error('body') border-red-500 @enderror placeholder="Post something!" ></textarea>
                    </div>
                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror
                    
                    <div>
                        <button type="submit" class="btn btn-primary" style="width:100%; margin:10px 0%; ">Post</button>
                    </div>
                
                </form>
            @endauth
            
            @guest
                <h1 style="text-align:center">Viewing as guest</h1>
                <hr>
            @endguest
            
            <div class="container" style="align:center;">
                
                @if ($posts->count())
                    @foreach($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                    {{ $posts->links('pagination::bootstrap-4') }}
                @endif
                
            </div>
    
                
            
        </div>
    </div>
@endsection