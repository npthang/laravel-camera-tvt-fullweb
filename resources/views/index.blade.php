@extends('layout.layout')

@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
            display: inline-block;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
        }
    </style>


    <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" style="width: 100%;" src="{{asset('img/home/slide-1.jpg')}}"
                         alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="width: 100%;" src="{{asset('img/home/slide-2.jpg')}}"
                         alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="width: 100%;" src="{{asset('img/home/slide-3.jpg')}}"
                         alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="width: 100%;" src="{{asset('img/home/slide-5.jpg')}}"
                         alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" style="width: 100%;" src="{{asset('img/home/slide-6.jpg')}}"
                         alt="Third slide">
                </div>
            </div>
            <a target="_blank"  class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a target="_blank"  class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        {{--<div class="container py-5">--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-12 text-white">--}}
        {{--<h1 class="display-3 mb-4">Hero image intro</h1>--}}
        {{--<p class="lead mb-5">Pingendo is a HTML editor for everyone. Easy for newbies, useful for professionals.--}}
        {{--<br>Code quality is a must. Pingendo generates clean, battle-tested, modular Bootstrap 4 code. </p>--}}
        {{--<a target="_blank"  href="#" target="_blank" class="btn btn-lg mx-1">--}}
        {{--<img src="{{asset('img/home/google_play.png')}}" height="50px" width="142px"> </a>--}}
        {{--<a target="_blank"  href="#" target="_blank" class="btn btn-lg mx-1">--}}
        {{--<img src="{{asset('img/home/app_store.png')}}" height="50px" width="142px"> </a>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class="py-5 text-center" style="padding-bottom: 0!important">
        <div class="" style="margin-left: 23px;">
            <div class="row">
                <div class="col-md-2" style="padding-top: 0!important; padding-right: 0; padding-left: 0;">
                    {{--loop danh muc--}}
                    @foreach($category_types as $category_type)
                        <div style="background-color: #fe7d20; padding: 3px; color: white;"><b>{{$category_type->name}}</b></div>
                        <?php showCategories($category_type->categories, $parent_id = 0, $char = '') ?>
                    @endforeach
                </div>

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 p-4" style="padding-top: 0!important;">
                            <div style="background-color: #fe7d20; margin-bottom: 7px; padding: 5px;"><a target="_blank" 
                                    style="color: white; text-decoration: none;" href="{{ route('about-us') }}"><b>ĐÔI NÉT VỀ
                                TVT</b></a></div>
                            <a target="_blank"  href="{{ route('about-us') }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$doinet->image)}}"></a>
                            <p class="my-4"><?php echo $doinet->description ?></p>
                        </div>
                        <div class="col-md-4 p-4" style="padding-top: 0!important;">
                            <div style="background-color: #fe7d20; margin-bottom: 7px; padding: 5px; color: white;"><a target="_blank" 
                                        style="color: white; text-decoration: none;" href="{{ route('products') }}"><b>SẢN PHẨM
                                    KINH DOANH</b></a></div>
                            <a target="_blank" href="{{ route('products') }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$sanpham->image)}}"></a>
                            <p class="my-4"><?php echo $sanpham->description ?></p>
                        </div>
                        <div class="col-md-4 p-4" style="padding-top: 0!important;">
                            <div style="background-color: #fe7d20; margin-bottom: 7px; padding: 5px; color: white;"><a target="_blank" 
                                        style="color: white; text-decoration: none;" href="{{ route('news') }}"><b>TIN TỨC NỔI
                                    BẬT</b></a></div>
                            <a target="_blank" href="{{ route('news') }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$tintuc->image)}}"></a>
                            <p class="my-4"><?php echo $tintuc->description ?></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12"
                     style="background-color: #fe7d20; font-size: 1.5em; text-align: center; margin-bottom: 10px; color: white;">
                    <b>GIỚI THIỆU VỀ DÒNG CAMERA CAO CẤP TVT</b>
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-5 text-center opaque-overlay"
         style="background-image: url(&quot;{{asset('img/home/slide-5.jpg')}}&quot;);">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 text-white">
                    <h1 class="mb-4 display-4"><b>GIỚI THIỆU CAMERA GIÁM SÁT TVT</b></h1>
                    <p class="lead mb-5">TVT là thương hiệu camera quan sát sản xuất tại Trung Quốc,<br>
                        là nhà cung cấp giải pháp giám sát và camera quan sát hàng đầu thế giới.</p>
                    <a target="_blank"  href="{{ route('about-us') }}" class="btn btn-lg mx-1 btn-primary"
                       style="background-color: #fe7d20; border-color: #fe7d20;">Xem chi tiết</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div style="background-color: #fe7d20; font-size: 1.5em; color: white;" class="col-md-12 text-center">
                <a target="_blank"  style="color: white; text-decoration: none;" href="{{ route('products') }}"><b>CÁC SẢN PHẨM BÁN CHẠY</b></a>
            </div>
            <div class="row py-5">
                @foreach ($products as $product)
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a target="_blank"  href="{{ route('productsDetail', ['id' => $product->id]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage" style=""></a>
                      <div class="caption">
                        <a target="_blank"  href="{{ route('productsDetail', ['id' => $product->id]) }}"><h4>{{ $product->name }}</h4></a>
                        <i style="color: red;">Giá: Vui lòng liên hệ</i>
                        <div>
                          <button class="btn"><img style="height: 18px;" src="{{asset('img/home/cart.svg')}}"> Giỏ hàng</button>
                          <a target="_blank"  href="{{ route('productsDetail', ['id' => $product->id]) }}"><button class="btn">Chi tiết</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 text-center" style="padding-top: 0!important">
        <div class="container">
            <div style="background-color: #fe7d20; font-size: 1.5em; margin-left: 8px; color: white;" class="">
                <a target="_blank"  style="color: white; text-decoration: none;" href="{{ route('solutions') }}"><b>GIẢI PHÁP CỦA CAMERA TVT</b>
                    </a></div>
            <div class="row">
                @foreach($solutions as $solution)
                    <div class="col-md-3 p-4">
                        <a target="_blank"  href="../../solutions/{{$solution->id}}"><div><b>{{ $solution->name }}</b></div></a>
                        <a target="_blank"  href="../../solutions/{{$solution->id}}"><img class="img-fluid d-block mx-auto rounded"
                             src="{{asset('upload/solutions/'.$solution->image)}}">
                    </div></a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 text-center" style="padding: 0!important;">
        <div class="container">
            <div style="text-align: center; background-color: #fe7d20; font-size: 1.5em; color: white;"><a target="_blank" 
                        style="color: white; text-decoration: none;" href="{{ route('partners') }}"><b>CÁC ĐỐI TÁC CỦA
                    CAMERA TVT</b></a></div>
            <div class="row">
                @foreach($partners as $partner)
                    <div class="col-md-2 p-4">
                        <a target="_blank"  href="http://cameratvtvietnam.com/news/13"><img class="img-fluid d-block mx-auto rounded"
                             src="{{asset('upload/partners/'.$partner->image)}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 text-center" style="padding-top: 0!important;">
        <div class="container">
            <div style="background-color: rgb(254, 125, 32); font-size: 1.5em; color: white;" class=""><a target="_blank" 
                        style="color: white; text-decoration: none;" href="{{ route('projects') }}"><b>CÔNG TRÌNH THỰC
                    TẾ</b></a></div>
            <div class="row">
                @foreach($projects as $project)
                    <div class="col-md-3 p-4">
                        <a target="_blank"  href="http://cameratvtvietnam.com/news/14"><h4>{{ $project->name }}</h4></a>
                        <a target="_blank"  href="http://cameratvtvietnam.com/news/14"><img class="img-fluid d-block mx-auto rounded"
                             src="{{asset('upload/projects/'.$project->image) }}"></div></a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="py-5">
                    <div class="">
                        <div style="background-color: #fe7d20; font-size: 1.5em; color: white;" class="col-md-6"><b>CÓ THỂ
                            BẠN CHƯA BIẾT?
                        </b></div>
                        <hr style="border-color: #fe7d20; margin-top: 7px;">
                        <div class="row">
                            @foreach($youknows as $youknow)
                               <!-- <div class="col-md-4">
                                    <img class="img-fluid d-block mb-4 img-thumbnail w-75"
                                         src="{{asset('upload/youknows/'.$youknow->image)}}"></div>-->
                                <div class="col-md-10">
                                    <a target="_blank"  href="/youknows/{{ $youknow->id }}">{!! $youknow->title !!}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="py-5">
                    <div class="">
                        <div style="background-color: #fe7d20; font-size: 1.5em; color: white; padding-left: 15px;">
                            <b>TIN TỨC</b>
                        </div>
                        @foreach($news as $key =>$new)
                           @if($key<=4)
                        <hr style="border-color: #fe7d20; margin-top: 7px;">
                            <a target="_blank"  href="/news/{{ $new->id }}">{{ $new->title }}</a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script>
        function openModal() {
            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

@endsection
