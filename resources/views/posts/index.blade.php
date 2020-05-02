@extends('layouts.app')
@section('content')


<div class="container">
<a href="{{url('post/create')}}" class="btn btn-primary" style="float:right; ">+ Add Post</a>
    <h1>All Posts</h1><hr>
    <div class="jumbotron">
            <div class="row content">
            <div class="col-lg-12">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @foreach ($posts as $post)
                    
                <h2>{{ \Illuminate\Support\Str::limit($post->title, 100, '...') }}</h2>
                <p>  {{ \Illuminate\Support\Str::limit($post->description, 450, '...') }}
                    @if(strlen($post->description) > 450)
                    <a href="{{url('post/'.$post->id)}}">Read More</a>
                    @endif
                    <br><br>
                <a href="{{url('post/'. $post->id.'/edit')}}" class="text-danger">Delete Post</a>
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