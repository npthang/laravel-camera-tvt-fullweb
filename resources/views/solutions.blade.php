@extends('layout.layout')

@section('content')
<div class="py-5">
  <div class="py-5 text-center" style="padding-top: 0!important">
    <div class="container">
      <div style="background-color: #fe7d20; font-size: 1.5em; margin-left: 8px; color: white;" class="col-md-4">{{ __('messages.solution-tvt') }}</div>
      <div class="row">
        @foreach($solutions as $solution)
        <div class="col-md-3 p-4">
          <a target="_blank"  href="{{ route('solutionDetail', ['id' => $solution->id]) }}">
          <div class="text-center px-2">
            {{ $solution->name }}
          </div>
          <img class="img-fluid d-block mx-auto rounded w-100" src="{{asset('upload/solutions/'.$solution->image)}}"> </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
