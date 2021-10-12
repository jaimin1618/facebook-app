@extends('layouts.app')

@section('content')
    
    <link rel="stylesheet" href="{{asset('css/profile_view_style.css')}}"  type="text/css" >
    @php
        $posts = auth()->user()->posts()->get();
    @endphp
    
    <div class="card" style="width: 25rem;">
        
        
        <img src="{{ asset('images/jane@test.com.png') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{auth()->user()->first_name}}  {{auth()->user()->last_name}}</h5>
        <hr>
        <p>Contact-email: {{auth()->user()->email}}</p>
        <p>Gender: {{auth()->user()->gender}}</p>
        <p>Date of birth: {{auth()->user()->date_of_birth}}</p>
        <p>Number of posts: {{auth()->user()->posts->count()}}</p>
        <a href="{{ route('users.posts', auth()->user()) }}" class="btn btn-primary" style="width:100%;">Your posts</a>
      </div>
    </div>
    

    {{-- <x-slider :posts="$posts" /> --}}
    
    
    

    
    
@endsection