@props(['posts' => $posts])
    <link rel="stylesheet" href="{{asset('resources/css/slider.css')}}">
    
    <div class="main">
        
        <div class="sub">
            @if ($posts->count() > 0)
                @foreach($posts as $post)
                    <x-post :post="$post" />
                @endforeach
            @else
                no
            @endif
        </div>

        
        
        
    </div>
    

        
