@extends('layouts.app')
@section('content')

    <div class="container">
        @if(count($errors))
        <div class="col-12">
            <ul class="alert alert-danger ">
                @foreach($errors->all() as $error)
                    <li class="ml-4">{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{url('post')}}">
            @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Post Title">
            
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" name="description"  placeholder="Post Description" id="exampleFormControlTextarea1" rows="10"></textarea>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection