@extends('layouts.app')
@section('content')
    
    <link rel="stylesheet" href="{{asset('resources/css/login_style.css')}}" type="text/css">
            
    <div class="container">
        <h1 id="fb"> <span class="first_w">F</span>acebook <span class="first_w">L</span>ogin</h1>
        <div class="line">
            <hr id="line">
        </div>
        <form action="{{route('login')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="email" value="{{old('email')}}">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" value="">
            </div>
            <input class="btn btn-primary" type="submit" name="login" value="Login">
            <div id="already">
                <small style="align:center;">Don't have an account <a href="{{route('register')}}"> Sign up </a> </small>
            </div>
        </form>
    </div>
    
@endsection