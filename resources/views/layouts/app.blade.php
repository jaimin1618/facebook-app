<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Facebook</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('css/app.css')}}"  type="text/css" >
	
	{{-- facebook image address --}}
	<link rel="icon" href="data:image/png;base64,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">
</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding-left:20px; text-align:right; color:white;">
		  <a class="navbar-brand" href="{{route('about')}}"  style="font-weight:bold;">Facebook</a>
	
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		     
			  
			  <li class="nav-item">
			   <a class="nav-link" href="{{route('posts.index')}}">Posts</a>
			 </li>
			 
			 <li class="nav-item active" style="width:80px;">
			   <a class="nav-link" href="{{route('about')}}">About us</a>
			 </li>
			  
			  
			  @auth
				  <li class="nav-item temp">
				  <a class="nav-link" href="{{route('profile')}}">{{strtolower(auth()->user()->first_name)}}</a>
				</li>
				
				<li class="nav-item ">
					<form class="d-flex" action="{{route('logout')}}" method="post">
					  @csrf
			          <button id="logout" class="btn btn-outline-success" type="submit">Logout</button>
			        </form>
				</li>
		  	  @endauth
			  @guest
				  <li class="nav-item temp">
				   <a class="nav-link" href="{{route('login')}}">Login</a>
				 </li>
				 
				 <li class="nav-item ">
				   <a class="nav-link" href="{{route('register')}}">register</a>
				 </li>
				 
				 <li class="nav-item ">
				   <a class="nav-link" href="{{route('register')}}">Guest</a>
				 </li>
			  @endguest
			  
		    </ul>
			
		
		  </div>
		</nav>
	</header>


    @yield('content')
	
	
	
	<br> <br>
	<footer style="float:end; margin-bottom:0px;height:0px" class="bg-light text-center text-lg-start" id="footer">
	  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	    © 2021 Copyright:
	    <a class="text-dark" href="{{route('about')}}">facebook.com</a>
	  </div>
	</footer>
	
	


</body>
</html>