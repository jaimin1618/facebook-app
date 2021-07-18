@props(['post' => $post])

{{-- NOTE: If you are NOT using COMPONENT CTOR, DELETE IT otherwise this won't WORK --}}

<div class="card w-100" style="margin-bottom: 30px;">
  <div class="card-body">
    <h5 class="card-title"><a href="{{route('user_profile', $post->user)}}">{{$post->user->first_name}} {{$post->user->last_name}}</a></h5> <p>post created at: {{$post->created_at->diffForHumans()}}
        | <span> {{$num = $post->likes->count()}} @if ($num < 2) Like @else Likes @endif | <a href="{{ route('users.posts', $post->user)}}">all posts</a> |
        @auth
             @if ($post->user_id == auth()->user()->id)
                <form action="{{ route('posts.destroy', $post) }}" method="post" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-warning btn-sm">Delete</button>
                </form>
            @endif
        @endauth
</p>

<hr>
    <p class="card-text">{{$post->body}}</p>

    @auth
        @if (!$post->likedBy(auth()->user()))
            
            <form action="{{ route('posts.likes', $post) }}" method="post">
                @csrf
                <button style="width:80px;margin-bottom:0px;" type="submit" class="btn btn-primary btn-sm">Like</button>
            </form>
            
        @else
        
            <form  action="{{ route('posts.likes', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button style="width:80px;margin-bottom:0px;" type="submit" class="btn btn-primary btn-sm">Dislike</button>
            </form>
            
        @endif
        
        
    
        
    @endauth
    
    
    
    
        
    </div>
</div>