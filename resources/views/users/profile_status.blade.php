@extends('layouts.app')

@section('content')
    
    <link rel="stylesheet" href="{{asset('resources/css/profile_view_style.css')}}"  type="text/css" >

    
    <div class="card" style="width: 25rem;">
        <img src="{{asset($user->image_address)}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$user->first_name}}  {{$user->last_name}}</h5>
        <hr>
        <p>Contact: {{$user->email}}</p>
        <p>Gender: {{$user->gender}}</p>
        <p>Date of birth: {{$user->date_of_birth}}</p>
        <p>Number of posts: {{$user->posts->count()}}</p>
        <a href="{{ route('users.posts', $user) }}" class="btn btn-primary" style="width:100%;">All Posts</a>
      </div>
    </div>
    
@endsection