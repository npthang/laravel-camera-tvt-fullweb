<!DOCTYPE html>
<html lang="vi">

<head>
  <title>Camera TVT Viet Nam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <meta property="og:url"           content="https://www.your-domain.com/your-page.html" /> --}}
  {{-- <meta property="og:type"          content="website" /> --}}
  {{-- <meta property="og:title"         content="Your Website Title" /> --}}
  {{-- <meta property="og:description"   content="Your description" /> --}}
  <meta property="og:image"         content="http://cameratvtvietnam.com/upload/products/2018-01-19-090209-camera-h265-ip-td-9442e2-dpeir2png" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  {{-- <link rel="stylesheet" href="https://v40.pingendo.com/assets/bootstrap/bootstrap-4.0.0-beta.1.css" type="text/css">  --}}
  <link rel="stylesheet" type="text/css" href="{{asset('css/basic/theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('slick-1.8.0/slick/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('slick-1.8.0/slick/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/tvt.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/> --}}
  {{-- <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> --}}
  {{-- <script type="text/javascript" src="slick/slick.min.js"></script> --}}
</head>

<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="row p-2">
        <div>
        <a target="_blank"  href="{{ route('about-us') }}">
            <img src="{{asset('img/home/header.png')}}" style="height: 100%"></a>
        </div>
        <div class="hidden-sm-down">
            <a target="_blank" href="{{ route('articleDetails', [$lienhe->slug]) }}">
            <img src="{{asset('img/home/he-thong-dai-ly.png')}}" class="header"></a>
            <img  class='px-3' src="{{asset('img/home/ho-tro-24-7.png')}}" class="header">
            <a target="_blank" href="http://cameratvtvietnam.com/vi/ho-tro-doi-tac/chinh-sach-van-chuyen"><img src="{{asset('img/home/van-chuyen-toan-quoc.jpg')}}" class="header"></a>
            <a target="_blank" href="http://cameratvtvietnam.com/vi/ho-tro-doi-tac/chinh-sach-bao-hanh"><img src="{{asset('img/home/bao-hanh-48h.jpg')}}" class="header">
            </a>
            <a target="_blank" href="{{ route('policy') }}"><img src="{{asset('img/home/chinh-sach-linh-hoat.jpg')}}" style="height: 55px"></a>
            <img src="{{asset('img/home/sdt.jpg')}}" style="height: 60px">
        </div>
        <div class="lang">
            <a href="/language/vi"><img class="a-lang" src="{{ asset('img/home/vietnam.jpg') }}"></a>
            <a href="/language/en"><img class="a-lang" src="{{ asset('img/home/english.jpg') }}"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
    <div class="row mx-0">
        <nav class="navbar navbar-expand-md bg-secondary navbar-dark layout-nav" data-spy="affix" data-offset-top="197">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="col-md-12">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('home') }}"><b>{{ __('messages.home') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('about-us') }}"><b>{{ __('messages.about-us') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('products') }}"><b>{{ __('messages.product') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('solutions') }}"><b>{{ __('messages.solution') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('projects') }}"><b>{{ __('messages.project') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('policy') }}"><b>{{ __('messages.policy') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('news') }}"><b>{{ __('messages.news') }}</b></a>
                </li>
                <li class="nav-item">
                  <a target="_blank" class="nav-link text-white nav-tvt" href="{{ route('articleDetails', [$lienhe->slug]) }}"><b>{{ __('messages.contact') }}</b></a>
                </li>
                <li class="nav-item">
                    <form class="form-inline m-0 w-search search" action="{{ route('Search') }}">
                      <input class="form-control mr-2 ip-search" type="text" placeholder="Search..." name="search">
                      <button class="btn btn-search" type="submit"><img height="24px" height="" src="{{asset('img/home/search.svg')}}"></button>
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
</div>

@yield('content')
<div class="py-5 text-center" style="padding: 0!important;">
    <div class="container">
        <div class="td-cn"><a class="nav-footer" target="_blank" href="{{ route('articleDetails', [ 'slug' => $certification->slug ]) }}"><b>{{ __('messages.testimonial') }}</b></a></div>
        <div class="row p-4">
            {{--@foreach($partners as $partner)--}}
            @foreach(app('App\Http\Controllers\HomePageController')->testimonials() as $index => $testimonial)
                <div class="col-md-12">
                    <a href="javascript:void(0);">
                        <img src="{{asset('upload/testimonials/' .$testimonial->image)}}" onclick="openModal({{ app('App\Http\Controllers\HomePageController')->testimonials() }}, 'upload/testimonials/');currentSlide({{$index}})" class="w-100 hover-shadow cursor"></a>
                </div>
            @endforeach
            {{--@endforeach--}}
        </div>
    </div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content" id="modal-content">
        
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('img/home/anh18.png')}}">
            <img src="{{asset('img/home/anh15.png')}}"></div>
        <div class="col-md-8">
            <p class="lead lead-km">{{ __('messages.key') }}</p>
            <form class="form-inline">
                <div class="form-group">
                    <input type="email" class="form-control"
                           placeholder="Your e-mail address"></div>
                <button type="submit" class="btn btn-primary ml-3">SUBCRIBE
                    <br></button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-5">
        <div class="row">
            <div class="col-md-3">
                {{-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fphanphoiuyquyencameratvtvietnam%2F&tabs&width=250&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=126412634650549" width="250" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> --}}
                    
                <div class="row addthis_toolbox addthis_default_style">
                    <div class="col-md-6">
                        <div class="fb-share-button" data-layout="button_count" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank">Chia sẻ</a></div>
                    </div>

                    <div class="col-md-6" style="padding-top: 4px;">
                        <g:plusone size="medium""></g:plusone>
                        <div class="atclear"></div>
                    </div>
                </div>

                <a class="nav-footer" target="_blank" href=""><p class="p-catelogue"><b>DOWNLOAD CATALOGUE</b></p></a>

                <a class="nav-footer" target="_blank" href="{{ route('articleDetails', [ 'slug' => $hoptac->slug ]) }}"><p class="p-htdl"><b>{{ __('messages.AGREEMENT') }}</b></p></a>
            </div>

            <div class="col-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 htdl">
                            <div style="text-align: center;"><a class="nav-footer" target="_blank" href="{{ route('articleDetails', [ 'slug' => $lienhe->slug ]) }}"><b>{{ __('messages.AGENT') }}</b></a></div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(app('App\Http\Controllers\BlockController')->index()[0] as $key => $daily)
                        <div class="col-md-4 col-6">
                            <ul class="dl">
                                <li><a target="_blank" href="{{ $daily->link }}">{{ $daily->title }}</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 htdl">
                            <div style="text-align: center;"><a class="nav-footer" target="_blank" href="#"><b>{{ __('messages.PARTNERSHIP') }}</b></a></div>
                        </div>
                        @foreach(app('App\Http\Controllers\BlockController')->index()[1] as $key => $hotro)
                        <div class="col-md-12 col-6">
                            <ul class="ul-block">
                                <li><a target="_blank" href="{{ $hotro->link }}">{{ $hotro->title }}</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 htdl">
                            <div style="text-align: center;"><a class="nav-footer" target="_blank" href=""><b>{{ __('messages.DOCUMENT') }}</b></a></div>
                        </div>
                        @foreach(app('App\Http\Controllers\BlockController')->index()[2] as $key => $tailieu)
                        <div class="col-md-12 col-6">
                            <ul class="ul-document">
                                <li><a target="_blank" href="{{ $tailieu->link }}">{{ $tailieu->title }}</a></li>
                            </ul>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row van-phong">
        <div class="col-md-6"><b>{{ __('messages.dn-room') }}</b>
            <p class="p-room">{{ __('messages.dn-add') }}</p>
            <p class="p-room">Hotline: 0905 821 068</p>
            <p>Email: songvudn@gmail.com</p>
        </div>
        <div class="col-md-6"><b>{{ __('messages.hcm-room') }}</b>
            <p class="p-room">{{ __('messages.hcm-add') }}</p>
            <p class="p-room">Hotline: 0888 08 99 77</p>
            <p>Email: songvuhochiminh@gmail.com</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 icon">
            <div class="align-self-center col-12 my-4">
                <a target="_blank"  href="https://www.facebook.com" target="_blank"><i
                            class="fa fa-facebook d-inline fa-lg mr-3"></i></a>
                <a target="_blank"  href="https://twitter.com" target="_blank"><i class="fa fa-twitter d-inline mx-3 fa-lg"></i></a>
                <a target="_blank"  href="https://www.instagram.com" target="_blank"><i
                            class="fa fa-instagram d-inline mx-3 fa-lg"></i></a>
                <a target="_blank"  href="https://plus.google.com" target="_blank"><i
                            class="fa fa-google-plus-official d-inline mx-3 fa-lg"></i></a>
                <a target="_blank"  href="https://pinterest.com" target="_blank"><i
                            class="fa fa-pinterest-p d-inline mx-3 fa-lg"></i></a>
            </div>
        </div>
        <div class="col-md-2 tdl-img">
            <img src="{{asset('img/home/anh18.png')}}"></div>
        <div class="col-md-7 tdl"><b>{{ __('messages.total-agent') }}</b>
        </div>
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>

  <script>

        function openModal(data, imageUrl) {
            $.each(data, function(key, val) {
                // console.log(key);
                // console.log(val.image);
                $('#modal-content').append(`
                    <div class="mySlides">
                        <img src="/${imageUrl}${val.image}" style="width:100%">
                    </div>
                `);
            });
            $('#modal-content').append(`
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            `);

            // $.each(data, function(key, val) {
            //     $('#modal-content').append(`
            //         <div class="mySlides">
            //         <img src="/${imageUrl}${val.image}" style="width:100%">
            //     </div>
            //         <div class="column">
            //             <img class="demo cursor" src="/${imageUrl}${val.image}" style="width:100%" onclick="currentSlide(${key + 1})" alt="Nature and sunrise">
            //         </div>
            //     `);
            // });

            document.getElementById('myModal').style.display = "block";
        }

        function closeModal() {
            document.getElementById('myModal').style.display = "none";
        }

        var slideIndex = 0;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n + 1);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > slides.length) {slideIndex = 0}
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

    <script type="text/javascript">
        $(document).ready(function(){
          $('.responsive').slick({
              dots: true,
              infinite: false,
              speed: 300,
              slidesToShow: 4,
              slidesToScroll: 4,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
            });
        });
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.12&appId=126412634650549&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js" ></script>
    {{-- <script type=”text/javascript”src=”http://apis.google.com/js/plusone.js”></script> --}}
</body>

</html>