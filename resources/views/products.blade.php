@extends('layout.layout')

@section('content')
<div class="py-5">
  <div class="container">
      @foreach(app('App\Http\Controllers\BlockController')->index()[3] as $item)
          @foreach($item->image as $image)
            <div class="table-image">
            <a target="_blank"  href="{{ $item->link }}">
                <img width="100%" src="{{ asset('upload/blocks/'. $image) }}">
              </a>
            </div>
          @endforeach
      @endforeach

    <div class="py-5">
      <div style="background-color: #fe7d20; font-size: 1.5em; color: white;" class="col-md-12 text-center">{{ __('messages.products') }}</div>
    </div>
    
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-4">
        <div class="thumbnail">
          <a data-toggle="tooltip" title="{{ $product->name }}" target="_blank"  href="{{ route('productsDetail', [$product->slug]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage" style=""></a>
          <div class="caption" style="padding-top: 22px; padding-bottom: 30px;">
            <a target="_blank"  href="{{ route('productsDetail', [$product->slug]) }}"><h4>{{ $product->name }}</h4></a>
            <i style="color: red;">{{ __('messages.price') }}</i>
            <div>
              <button class="btn"><img style="height: 18px;" src="{{asset('img/home/cart.svg')}}">{{ __('messages.cart') }}</button>
              <a target="_blank"  href="{{ route('productsDetail', [$product->slug]) }}"><button class="btn">{{ __('messages.detail') }}</button></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection


@section('script')
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection
