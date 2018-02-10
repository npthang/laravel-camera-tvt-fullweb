@extends('layout.layout')

@section('content')

<div class="py-5">
  <div class="py-5 text-center bg-light" style="padding: 0!important;">
    <div class="container">
      <div style="text-align: center; background-color: #fe7d20; font-size: 1.5em; color: white;">CÁC ĐÔÍ TÁC CỦA CAMERA TVT</div>
      <div class="row">
        @foreach($partners as $partner)
        <div class="col-md-2 p-4">
          <img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/partners/'.$partner->image)}}">
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection