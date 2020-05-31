@extends('layouts.app')
@section('content')

<example-component v-bind:current-user="'{{ $name }}'"></example-component>
      

@endsection

