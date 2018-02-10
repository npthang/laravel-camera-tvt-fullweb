@extends('layout.layout')

@section('content')
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid d-block mb-4 w-100 img-thumbnail" src="{{ asset('upload/articles/'.$article->image) }}"> </div>
          
        <div class="col-md-7">
          <h2 class="text-primary pt-3">{{ $article->name }}</h2>
          <h3></h3>
          <p class="">{!! $article->description !!}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Lorem ipsum dolor sit amet</h3>
          <p class="">{{ $article->body }}</p>
      </div>
      <div class="col-md-4">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p class="">{{ $article->body }}</p>
      </div>
      <div class="col-md-4">
        <h3>Lorem ipsum dolor sit amet</h3>
        <p class="">{{ $article->body }}</p>
      </div>
      </div>
    </div>
  </div>
@endsection
