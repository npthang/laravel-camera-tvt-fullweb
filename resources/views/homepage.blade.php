@extends('layout.layout')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                            <img class="d-block img-fluid w-100 banner-home" src="{{asset('img/home/slide-1.jpg')}}"
                                 alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid w-100 banner-home" src="{{asset('img/home/slide-2.jpg')}}"
                                 alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid w-100 banner-home" src="{{asset('img/home/slide-3.jpg')}}"
                                 alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid w-100 banner-home" src="{{asset('img/home/slide-4.jpg')}}"
                                 alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid w-100 banner-home" src="{{asset('img/home/slide-5.jpg')}}"
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
            </div>
        </div>
    </div>

    <div class="py-5 text-center" style="padding-bottom: 0!important">
        <div class="container-fluid">
            <div class="row mx-0">
                <div class="col-md-2 category_types">
                    {{--loop danh muc--}}
                    @foreach($category_types as $category_type)
                        <div><b>{{ $category_type->name}}</b></div>
                        <?php showCategories(app()->getLocale(), $category_type->categories, $parent_id = 0, $char = ''); ?>
                    @endforeach
                </div>

                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4 p-4 title-pad">
                            <div class="title"><a class="nav-footer" target="_blank" href="{{ route('about-us') }}"><b>{{ __('messages.about-tvt') }}</b></a></div>
                            <a target="_blank"  href="{{ route('about-us') }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$doinet->image)}}"></a>
                            <p class="my-4"><div class="hide-mobile"><?php echo $doinet->description; ?></div></p>
                        </div>
                        <div class="col-md-4 p-4 title-pad">
                            <div class="title"><a class="nav-footer" target="_blank" href="{{ route('products') }}"><b>{{ __('messages.busines-product') }}</b></a></div>
                            <a  target="_blank" href="#"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$sanpham->image)}}"></a>
                            <p class="my-4"><div class="hide-mobile"><?php echo $sanpham->description; ?></div></p>
                        </div>
                        <div class="col-md-4 p-4 title-pad">
                            <div class="title"><a class="nav-footer" target="_blank" href="{{ route('news') }}"><b>{{ __('messages.featured-news') }}</b></a></div>
                            <a target="_blank" href="{{ route('news') }}"><img class="img-fluid d-block mx-auto rounded" src="{{asset('upload/articles/'.$tintuc->image)}}"></a>
                            <p class="my-4"><div class="hide-mobile"><?php echo $tintuc->description; ?></div></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 introduction1">
                    <b>{{ __('messages.introduction1') }}</b>
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-5 text-center opaque-overlay"
         style="background-image: url(&quot;{{asset('img/home/slide-5.jpg')}}&quot;);">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 text-white">
                    <h1 class="mb-4 display-4"><b>{{ __('messages.introduction2') }}</b></h1>
                    <p class="lead mb-5">{{ __('messages.introduction3') }}</p>
                    <a class="btn btn-lg mx-1 btn-primary detail" target="_blank"  href="{{ route('about-us') }}">{{ __('messages.see-details') }}</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div style="background-color: #fe7d20; font-size: 1.5em; color: white;" class="col-md-12 text-center" href="#"><b>{{ __('messages.retail-product') }}</b></a>
            </div>
            <div class="row py-5 responsive" style="padding-bottom: 0!important;">
                @foreach ($products as $product)
                    <div class="thumbnail p-4">
                      <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage" style=""></a>
                      <div class="caption" style="padding-top: 22px; padding-bottom: 30px;">
                        <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"> <h4 style="height: 79px">{{ $product->name }}</h4> </a>
                        <i style="color: red;">{{ __('messages.price') }}</i>
                        <div>
                          <button class="btn">{{ __('messages.cart') }}</button>
                          <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><button class="btn">{{ __('messages.detail') }}</button></a>
                        </div>
                      </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('products') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
        </div>
    </div>

    <div class="py-5 text-center" style="padding-top: 0!important;">
        <div class="container">
            <div class="solutions">
                <a class="nav-footer" target="_blank" href="{{ route('solutions') }}"><b>{{ __('messages.solution-tvt') }}</b>
                    </a></div>
            <div class="row responsive">
                @foreach($solutions as $solution)
                    <div class="col-md-3 p-4">
                        <a target="_blank"  href="{{ route('solutionDetail', ['id' => $solution->id]) }}"><div><b>{{ $solution->name }}</b></div></a>
                        <a target="_blank"  href="{{ route('solutionDetail', ['id' => $solution->id]) }}"><img class="img-fluid d-block mx-auto rounded"
                             src="{{asset('upload/solutions/'.$solution->image)}}"></a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('solutions') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
        </div>
    </div>

    <div class="py-5 text-center" style="padding: 0!important;">
        <div class="container">
            <div class="td-cn"><a class="nav-footer" target="_blank" href="#"><b>{{ __('messages.partner-tvt') }}</b></a></div>
            <div class="row responsive">
                @foreach($partners as $index => $partner)
                    <div class="col-md-2 p-4">
                        <a href="#"><img class="img-fluid d-block mx-auto rounded hover-shadow cursor"
                             src="{{asset('upload/partners/'.$partner->image)}}" onclick="openModal({{ $partners }}, 'upload/partners/');currentSlide({{$index}})"></a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('partners') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
        </div>
    </div>

    <div class="py-5 text-center">
        <div class="container">
            <div class="projects"><a class="nav-footer" target="_blank" href="{{ route('articleDetails', [$congtrinh->slug]) }}"><b>{{ __('messages.real-works') }}</b></a></div>
            <div class="row responsive">
                @foreach($projects as $project)
                    <div class="col-md-3 p-4">
                        <a target="_blank"  href="{{ route('articleDetails', [$congtrinh->slug]) }}"><h4>{{ $project->name }}</h4></a>
                        <a target="_blank"  href="{{ route('articleDetails', [$congtrinh->slug]) }}"><img class="img-fluid d-block mx-auto rounded"
                             src="{{asset('upload/projects/'.$project->image) }}"></div></a>
                @endforeach
            </div>
            <a href="{{ route('projects') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="py-5">
                    <div class="col-md-6 youknows"><b>{{ __('messages.youknows') }} </b></div>
                    <hr>
                    <div class="row">
                        @foreach($youknows as $youknow)
                           <!-- <div class="col-md-4">
                                <img class="img-fluid d-block mb-4 img-thumbnail w-75"
                                     src="{{asset('upload/youknows/'.$youknow->image)}}"></div>-->
                            <div class="col-md-10">
                                <a target="_blank"  href="{{ route('youknows', ['id' => $youknow->id]) }}">{!! $youknow->title !!}</a>
                            </div>
                        @endforeach
                    </div><br>
                    <a href="{{ route('youknows') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="py-5">
                    <div class="">
                        <div class="news-video">
                            <a class="nav-footer" target="_blank" href="{{ route('news') }}"><b>{{ __('messages.news') }}</b></a>
                        </div>
                        @foreach($news as $key =>$new)
                           @if($key<=4)
                        <hr>
                            <a target="_blank"  href="{{ route('newsDetail', ['slug' => $new->slug]) }}">{{ $new->title }}</a>
                            @endif
                        @endforeach
                    </div><br>
                    <a href="{{ route('news') }}" target="_blank" class="button" style="border-radius: 2px;">Xem tất cả &gt;&gt;</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="news-video">
                    <b>{{ __('messages.clip') }}</b>
                </div>
                <div class="video">
                    <iframe class="w-100" height="340" src="https://www.youtube.com/embed/fE0-wwKvRzs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-6">
                <div class="news-video">
                    <b>{{ __('messages.video') }}</b>
                </div>
                <div class='row' style="padding-left: 16px;">
                    <div class="col-md-6" style="padding-right: 18px; padding-left: 0;">
                        <div class="video">
                        <iframe class="w-100" height="157.5" src="https://www.youtube.com/embed/52WMavbAAlM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="video">
                        <iframe class="w-100" height="157.5" src="https://www.youtube.com/embed/N2XLkmR99k0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-md-6" style="padding-left: 0;">
                        <div class="video">
                        <iframe class="w-100" height="157.5" src="https://www.youtube.com/embed/JWThUzWV56k" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="video">
                        <iframe class="w-100" height="157.5" src="https://www.youtube.com/embed/RywCvt5JHyw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>
        <a href="https://www.youtube.com/channel/UCpE4ttVQe3xyXucSr5fOzGw" target="_blank" class="button">Xem tất cả &gt;&gt;</a>
    </div>

@endsection
