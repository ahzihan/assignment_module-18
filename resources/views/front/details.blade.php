@extends('front.layout')
@section('title')
My Blog | {{ $list->title }}
@stop

@section('cat_name')
<h2>{{ $list->category->categoryName }}</h2>
@stop


@section('content')
<div class="card mb-3 w-100">
  <img src="{{ asset('uploads/'.$list->photo) }}" class="card-img-top" alt="Image">
  <div class="card-body">
    <h5 class="card-title">{{ $list->title }}</h5>
    <p><small>{{ $list->created_at }}</small></p>
    <p class="card-text">{{ $list->description }}</p>
  </div>
</div>
@stop
