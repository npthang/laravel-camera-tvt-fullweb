@extends('layout.layout')

@section('content')
<div class="container category-page">
  <div class="row">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
     </ul>
   </div>
   @endif

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
        <div style="background-color: #fe7d20; font-size: 1.5em; margin-left: 7px; color: white;" class="col-md-3">CÁC SẢN PHẨM</div>  
      </div>

      <div class="">
        <div class="row">
          @foreach ($products as $product)
          <div class="col-md-4">
            <div class="thumbnail">
              <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage" style=""></a>
              <div class="caption" style="padding-top: 22px; padding-bottom: 30px;">
                <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><h4>{{ $product->name }}</h4></a>
                <i style="color: red;">Giá: vui lòng liên hệ</i>
                <div>
                  <button class="btn"><img style="height: 18px;" src="{{asset('img/home/cart.svg')}}"> Giỏ hàng</button>
                  <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><button class="btn">Chi tiết</button></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
