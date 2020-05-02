@extends('layouts.app')
@section('content')


<div class="container">
    <h1>All Posts</h1><hr>
    <div class="jumbotron">
            <div class="row content">
            <div class="col-lg-12">
                @foreach ($posts as $post)
                    
                <h2>{{ \Illuminate\Support\Str::limit($post->title, 100, '...') }}</h2>
                <p>  {{ \Illuminate\Support\Str::limit($post->description, 450, '...') }}
                    @if(strlen($post->description) > 450)
                    <a href="{{url('blog/'.$post->id)}}">Read More</a>
                    @endif
                </p>
                <br>
                <hr> 
                @endforeach
        
            </div>
            <div style="text-align:center; margin:0px auto;">
                {{ $posts->links() }}
            </div>
            </div>
    </div>
</div>
   
@endsection