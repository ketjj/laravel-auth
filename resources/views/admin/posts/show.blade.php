@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div>
    <h4>{{ $post->title }}</h4>
    <p>{{  $post->content}}</p>
  </div>     
@endsection