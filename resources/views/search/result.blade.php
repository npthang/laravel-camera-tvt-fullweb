@extends('../layout.layout')

@section('content')

<div class="ms-body container"> 
    <div class="listview lv-message">
        <div class="lv-body">
            <div class="row">
                <div class="col-md-12 py-5">
                    <h5 class="text-center">Result Of "{{ $nameSeach }}"</h5>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        @if($products->count()>0)
                            @foreach($products as $key => $product)
                                <div class="col-md-3" style="padding-bottom: 30px;">
                                    <div class="thumbnail">
                                      <a data-toggle="tooltip" title="{{ $product->name }}" target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><img class="img-responsive img-thumbnail" src="{{ asset('upload/products/'.$product->image) }}" alt="noImage" style=""></a>
                                      <div class="caption" style="padding-top: 22px; padding-bottom: 30px;">
                                        <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><h4>{{ $product->name }}</h4></a>
                                        <i style="color: red;">Giá: Vui lòng liên hệ</i>
                                        <div>
                                          <button class="btn"><img style="height: 18px;" src="{{asset('img/home/cart.svg')}}"> Giỏ hàng</button>
                                          <a target="_blank"  href="{{ route('productsDetail', ['slug' => $product->slug]) }}"><button class="btn">Chi tiết</button></a>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($categories->count()>0)
                            @foreach($categories as $key => $category)
                                <div class="col-md-4">
                                    <div class="lv-item media">
                                        <div class="media-body">
                                            <div class="lv-title"><a href="{{ route('categoriesDetail', ['id' => $category->id]) }}">{{ $category->name }}</a></div>
                                        </div>
                                    </div>
                                </div>  
                            @endforeach
                        @endif

                        @if($news->count()>0)
                            @foreach($news as $news)
                                <div class="row">
                                    <div class="col-md-5">
                                        <a target="_blank"  href="/news/{{ $news->slug }}"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                                            src="{{ asset('upload/news/'.$news->image) }}"></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ route('newsDetail', ['slug' => $news->slug]) }}">{{ $news->title }}</a></h2>
                                        <div class="">{!! $news->description !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($projects->count()>0)
                            @foreach($projects as $project)
                                <div class="row">
                                    <div class="col-md-5">
                                        <a target="_blank"  href="/projects/{{ $project->slug }}"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                                            src="{{ asset('upload/projects/'.$project->image) }}"></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ route('articleDetails', [$congtrinh->slug]) }}">{{ $project->name }}</a></h2>
                                        <div class="">{!! $project->description !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($articles->count()>0)
                            @foreach($articles as $article)
                                <div class="row">
                                    <div class="col-md-5">
                                        <a target="_blank"  href="/articles/{{ $article->slug }}"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                                            src="{{ asset('upload/articles/'.$article->image) }}"></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="text-primary pt-3"><a target="_blank"  href="/articles/{{ $article->slug }}">{{ $article->title }}</a></h2>
                                        <div class="">{!! $article->description !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($solutions->count()>0)
                            @foreach($solutions as $solution)
                                <div class="row">
                                    <div class="col-md-5">
                                        <a target="_blank"  href="/solutions/{{ $solution->slug }}"><img class="img-fluid d-block mb-4 w-100 img-thumbnail"
                                                                            src="{{ asset('upload/solutions/'.$solution->image) }}"></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ route('solutionDetail', ['id' => $solution->id]) }}">{{ $solution->name }}</a></h2>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if($blocks->count()>0)
                            @foreach($blocks as $block)
                                <div class="row">
                                    <div class="col-md-5">
                                        {{-- <a target="_blank"  href="/blocks/{{ $block->slug }}"></a> --}}
                                    </div>
                                    <div class="col-md-7">
                                        <h2 class="text-primary pt-3"><a target="_blank"  href="{{ $block->link }}">{{ $block->title }}</a></h2>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- @else
                            <div class="col-md-12 col-md-offset-2">
                                <h3  class="text-center">
                                    <span style="color: #761c19">NO DATA TO SHOW</span>
                                </h3>
                            </div>
                        @endif --}}
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
        
    </div>
</div>
@stop