@extends('layout.master')
@section('metatag')
<meta name="description" content="Dự án - Thiết kế website, Xây dựng ứng dụng di động, Tiếp thị trực tuyến" />
<meta name="keywords" content="Thiet ke website, Mobile app, marketing, Thiet ke web Da Nang" />
@endsection 
@section('content')
       
        <!-- Hero -->
        <section id="portfolio-hero" class="hero-fullwidth parallax">
            <div class="container">
                <div class="row" data-reveal="bottom">
                    
                    <div class="col-md-12 text-center">
                        <h1 class="hero-big-title">Dự án</h1>
                        <p class="lead mt20 mb50">Khách hàng đang sử dụng dịch vụ của iWeb!</p>
                        <a target="_blank"  href="#about" class="btn btn-md btn-primary btn-scroll">Bắt đầu</a>  
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Hero -->
        
        <!-- Portfolio -->
        <section>
            <div class="container">
                <div class="row text-center">    
                    
                    <div class="portfolio" data-gap="25"><!-- Values: 10, 15, 20, 25, 30 and 35 -->
                            
                        <!-- Portfolio Category Filters -->
                        <ul class="vossen-portfolio-filters" data-initial-filter="*">
                            <li data-filter="*">Tất cả</li>
                            <li data-filter="Mobile apps">Mobile apps</li>
                            <li data-filter="Websites">Websites</li>
                            <li data-filter="Marketing">Marketing</li>
                        </ul>
                        
                        <!-- Portfolio Items Container-->
                        <div class="vossen-portfolio">
                            <!-- Portfolio Item -->
                            @foreach($project as $da)
                            <div class="col-md-4 col-sm-6" data-filter="{{ $da->category }}">
                                <a target="_blank"  href="du-an/{{ $da->id }}/{{ $da->name_key }}.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>{{ $da->name }}</h4>
                                            <p>{{ $da->category }}</p>
                                        </div>
                                        <p> <img class="img-list"  src="{{ asset('upload/projects/' . json_decode($da->image)[0]) }}"> 
                                        </p>
                                        <p>
                                           {{ 'Dự án: '.$da->name }}<br>
                                            {{ 'Link: '.$da->link }}

                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Portfolio Item -->
                            @endforeach
                        </div>
                        
                    </div>
                
                </div>
            </div>
        </section>            
        <!-- End Portfolio -->     
@endsection 