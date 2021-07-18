@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="{{asset('resources/css/imageupload_style.css')}}">
    
        
    
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}">
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <div class="container">
        
        <div class="panel panel-primary">
          <div class="panel-heading">
              <h2>Upload your image here</h2> <hr>
          </div>
          <div class="panel-body">
            
         
            
            
            <div class="image_container">
                <img src="{{url('/public/images/one.jpg')}}" style="height:240px; width:100%;" class="img-thumbnail" alt="Image"/>
            </div>
        
            <form class="imageform" action="{{route('image_upload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control">
                    </div>
         
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
            
        
          </div>
        </div>
    </div>
    
    
    
    
@endsection