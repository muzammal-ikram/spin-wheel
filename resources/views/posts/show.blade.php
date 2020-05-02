@extends('layouts.app')
@section('content')


<div class="container">
    <h2>{{ $post->title }}</h2>
    <div class="jumbotron">
            <div class="row content">
            <div class="col-lg-12">
                    
                <p>  {{$post->description }}
                    
                </p>
                <br>
            </div>
            </div>
    </div>
</div>
   
@endsection