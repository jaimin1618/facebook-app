@extends('layouts.app')
@section('content')
    
    <link rel="stylesheet" href="{{asset('css/show_style.css')}}">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    
    <div style="height:200px;" class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
    @if ($posts->count() > 0)
        @foreach($posts as $post)
            
            <div class="gallery-cell" style="height:300px;" >
                <x-post :post="$post" />
            </div>
            
        @endforeach
    @else
        no posts found
    @endif
    </div>

@endsection
