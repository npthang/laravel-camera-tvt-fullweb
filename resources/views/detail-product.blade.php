@extends('layout.layout')

@section('content')
<div class="container product-page">
    <div class="row py-5">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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
            </div>

    </div>
            <div class="row py-5" style="padding-bottom: 0!important">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6"><div class="product-img">
                            <img data-toggle="tooltip" title="{{ $product->name }}" class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <h3 style="color: #ff7b16">{{ $product->name }}</h3>

                            <div class='border-top'>
                                <h3><a target="_blank"  style="text-decoration: none; color: #0074ea;" href="http://songvu.vn/camera/thuong-hieu-camera/tvt">Giá bán lẻ tham khảo</a></h3>
                                <p style="font-family: Arial; font-size: 16px;"><b>TÌNH TRẠNG: 
                                        @if($product->status == 3)
                                            <span style="color: red;">Còn hàng</span>
                                        @elseif($product->status == 2)
                                            <span style="color: red;">Đặt hàng</span>
                                        @elseif($product->status == 1)
                                            <span style="color: red;">Hết hàng</span>
                                        @endif</b></p>
                                <p style="font-family: Arial; font-size: 16px;"><b>BẢO HÀNH: <span style="color: red">24 THÁNG</span></b></p><br>
                                <pre style="font-family: Arial; font-size: 16px;">
<b style="color: red">BẢO HÀNH SIÊU TỐC 48H</b>
<b style="color: red">TRUNG TÂM BẢO HÀNH VÀ SỬA CHỮA TVT VIỆT NAM</b>

<b>Tại HCM</b>: 572/15A Âu Cơ, Phường 10, Quận Tân Bình, TP HCM

<b>Tại Đà Nẵng</b>: 109 Hàm Nghi, Phường Vĩnh Trung, Quận Thanh Khê, 
TP Đà Nẵng
                            </pre>

                            </div>
                        </div>
                    </div>
                    <div class="row py-5" style="padding-bottom: 0!important">
                        <div class="col-md-12">
                            <div class='border-top margin-top'>
                                <div style="background-color: #fe7d20; font-size: 1.5em; color: white;" class="col-md-12 text-center"><b>Mô tả sản phẩm</b></div>
                                <p>{!! $product->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <p style="color: #0074ea"><b><a style="text-decoration: none;" target="_blank" href="{{ route('news') }}">Tin tức</a></b></p>
                    <a target="_blank" href="{{ route('news') }}"><img class="w-100" src="{{ asset('img/home/tin-tuc.jpg') }}"></a>
                    <p style="color: #0074ea"><b><a style="text-decoration: none;" target="_blank" href="{{ route('projects') }}">Công trình</a></b></p>
                    <a target="_blank" href="{{ route('projects') }}"><img class="w-100" src="{{ asset('img/home/cong-trinh.jpg') }}"></a>
                    <p style="color: #0074ea"><b><a style="text-decoration: none;" target="_blank" href="https://www.youtube.com/channel/UCpE4ttVQe3xyXucSr5fOzGw/featured">Video</a></b></p>
                    <a target="_blank" href="https://www.youtube.com/channel/UCpE4ttVQe3xyXucSr5fOzGw/featured"><img class="w-100" src="{{ asset('img/home/video.png') }}"></a>
                </div>
            </div>
</div>

<div class="py-5" style="padding-top: 0!important">
    <div class="container">
        <div style="background-color: #fe7d20; font-size: 1.5em; color: white; padding-left: 15px; text-align: center;"><b>SẢN PHẨM LIÊN QUAN</b></div>
        <div style="margin-top: 30px;">
            @foreach($product_lienquan as $key =>$product)
            <p><a target="_blank"  href="{{ route('productsDetail', [$product->slug]) }}">{{ $product->name }}</a></p>
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