@extends('layout.layout')

@section('content')
<div class="py-5">
  <div class="py-5 text-center" style="padding-top: 0!important;">
    <div class="container">
      <div style="background-color: rgb(254, 125, 32); font-size: 1.5em;" class="col-md-12"><a style="color: white; text-decoration: none;" target="_blank" href="{{ route('articleDetails', [$congtrinh->slug]) }}">{{ __('messages.real-works') }}</a></div>
      <div class="row">
        @foreach($projects as $project)
        <div class="col-md-3 p-4">
          <h4><a target="_blank" style="text-decoration: none;" href="{{ route('articleDetails', [$congtrinh->slug]) }}">{{ $project->name }}</a></h4>
          <a target="_blank" href="{{ route('articleDetails', [$congtrinh->slug]) }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/projects/'.$project->image) }}"> </div></a>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection