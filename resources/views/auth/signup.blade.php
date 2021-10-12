@extends('layouts.app')

@section('content')
    {{-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> --}}
    <link rel="stylesheet" href="{{ asset('css/signup_style.css') }}">
    {{--
    @error('firstname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    @error('lastname')
        <div class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    @error('email')
        <div  class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    @error('password')
        <div  class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
    @error('gender')
        <div  class="alert alert-danger" role="alert">
            {{$message}}
        </div>
    @enderror
     --}}
     
     @error('image')
         <div  class="alert alert-danger" role="alert">
             {{$message}}
         </div>
     @enderror
    

      <div id="contentwrapper">
        <div id="content">
          <div id="leftbod">
            <div class="connect bolder">
              Connect with friends and the
              world around you on Facebook.
            </div>
            <ul id="items">
                <li>
                    <div class="space">
                        <span class="rowtext">See photos and updates</span>
                        <span class="rowtext2 fb1">from friends in News Feed</span> <br>
                    </div>
                </li>
                <li>
                    <div class="space">
                        <span class="rowtext">Share what's new</span>
                        <span class="rowtext2 fb1">in your life on your timeline</span> <br>
                    </div>
                </li>
                <li>
                    <div class="space">
                        <span class="rowtext">Find more</span>
                        <span class="rowtext2 fb1">of what you're looking for with graph search</span> <br>
                    </div>
                </li>
            </ul>
          </div>
           
           
          <div id="rightbod">
            <div class="signup bolder">Sign Up</div>
            <div class="free bolder">It's free and always will be</div>
            
            
            
            
            
            {{-- Registration form --}}
            <form class="signupform" action="{{route('register')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="formbox">
                    <input name="firstname" type="text" class="inputbody in1" placeholder="First name" @error('firstname') style="border:2px solid red;" @enderror value={{old('firstname')}} >
                    
                    <input name="lastname" type="text" class="inputbody in1 fr" placeholder="Last name" @error('lastname') style="border:2px solid red;" @enderror  value={{old('lastname')}} >
                
                </div>
                
                
                
                
                
                
                <div class="formbox">
                    <input name="email" type="text" class="inputbody in2" placeholder="Email" @error('email') style="border:2px solid red;" @enderror  value={{old('email')}} >
                </div>
            
                
                
                <div class="formbox">
                    <input name="password" type="password" class="inputbody in2" placeholder="password" @error('password') style="border:2px solid red;" @enderror >
                </div>
            
                
                
                
                <div class="formbox">
                    <input name="password_confirmation" type="password" class="inputbody in2" placeholder="re-enter password">
                </div>
                
                
                <div class="formbox">
                  <div class="bday">
                      Birthday
                    
                  {{-- <span data-type="selectors"> --}}
                    <span>
                         {{-- class="selectbody fl"  --}}
                        <select name="dob_d" title="Day" value={{old('dob_d')}}>
                            <option value="0" selected="1">Day</option>
                            <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                            <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                            <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                            <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                            <option value="13">13</option><option value="14">14</option><option value="15">15</option>
                            <option value="16">16</option><option value="17">17</option><option value="18">18</option>
                            <option value="19">19</option><option value="20">20</option><option value="21">21</option>
                            <option value="22">22</option><option value="23">23</option><option value="24">24</option>
                            <option value="25">25</option><option value="26">26</option><option value="27">27</option>
                            <option value="28">28</option><option value="29">29</option><option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                
                        
                            
                         {{-- class="selectbody"  --}}
                      <select name="dob_m" title="Month" value={{old('dob_m')}}>
                          <option value="0" selected="1">Month</option>
                          <option value="1">Jan</option>
                          <option value="2">Feb</option>
                          <option value="3">Mar</option>
                          <option value="4">Apr</option>
                          <option value="5">May</option>
                          <option value="6">Jun</option>
                          <option value="7">Jul</option>
                          <option value="8">Aug</option>
                          <option value="9">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                      </select>
                      {{-- <br> --}}
                      
                      
                      {{-- class="selectbody fl" --}}
                      <select name="dob_y" title="Year"   value={{old('dob_y')}}>
                          <option value="0" selected="1">Year</option>
                          <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option>
                          <option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option>
                          <option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option>
                          <option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option>
                          <option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option>
                          <option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option>
                          <option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option>
                          <option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option>
                          <option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option>
                          <option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option>
                          <option value="1965">1965</option>
                    </select>
                      
                      
            
                    </span>
                    
                    <hr>
                    
                    </div>
                    
                    <div class="formbox mt1">
                      <span data-type="radio" class="spanpad">
                        <input name="gender" value="female" type="radio" id="fem" class="m0">
                        <label for="fem" class="gender"> Female </label>
                        <input name="gender" value="male" type="radio" id="male" class="m0">
                        <label for="male" class="gender"> Male </label>
                      </span>
                    </div>
                    
                    
                    {{--
                    IMAGE UPLOAD LINK HERE----
                    
                    
                    <div id="image_link">
                        <h4> Upload <a href="{{route('image_upload')}}" id="p_link"> Profile picture</a> </h4>
                    </div>
                     --}}
                     
                     
                     
                    
                
                
                    <br> <br>
                    <div class="row">
                        <div class="col-md-6">
                            Upload profile picture
                            <input type="file" name="image" class="form-control" style="width:500px;">
                        </div>
                    </div>
                
                        
                        
                    
                    <div class="formbox">
                      <div class="agree">
                        <small>By Clicking Sign Up, You agreed to our <a href="#">terms</a> and <a href="#">condition</a> </small>
                      </div>
                    </div>
                    
                    <hr>
                    
                    
                    <div class="formbox">
                      <button type="submit" class="signbut bolder">Sign Up</button>
                    </div>
                    
                    
            </form>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong> <br>
                    <a href="{{route('image_upload')}}">Profile picture</a>
                </div>
            @endif
                        
          </div>
         </div>
        </div>
    
        
@endsection